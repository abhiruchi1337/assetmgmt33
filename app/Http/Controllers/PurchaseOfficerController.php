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
        // $item=$request->input('item');
         return view('/PO/acceptpo')->with('item',$item)->with('qty',$qty)->with('reason',$reason)->with('desc',$desc);
    }
    
}
