<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indent;
use App\Requests;
use App\Store_stock;
class PurchaseOfficerController extends Controller
{
    public function index(){
        $indents=Indent::all();
        
         return view('/PO/PO')->with('indents',$indents);
    }
    public function getindent(Request $request){
        // return $request;
        $item=$request->input('item');
        $qty=$request->input('qty');
        $uid=$request->input('u_id');
        $reason=$request->input('reason');
        $desc=$request->input('desc');
        $id=$request->input('id');
        $status=$request->input('status');
         return view('/PO/acceptpo')->with('item',$item)->with('qty',$qty)->with('reason',$reason)->with('desc',$desc)->with('id',$id)->with('status',$status);
    }
    public function updateindent(Request $request){
        // return $request;
        $id=$request->input('id');
        $status=intval($request->input('accept'));
        $original=Indent::where('id',$id)->first();
        $original->status=$status;
        
        $request=new Requests();
        $request->po_id=\Auth::user()->id;
        $request->item=$original->item;
        $request->qty=$original->qty;
        $stock= Store_stock::where('item_name',$original->item)->first();
        if (isset($stock)){
            if($stock->qty >= $original->qty){
                $request->available=1;
            }
            else{
                $request->available=0;
            }
        }
        else{
            $request->available=0;
        }
        $request->save();
        $original->save();

        return redirect('/po');

    }
    
}
