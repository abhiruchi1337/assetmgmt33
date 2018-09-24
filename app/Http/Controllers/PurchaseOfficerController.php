<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indent;

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
        $original->save();
        return redirect('/po');

    }
    
}
