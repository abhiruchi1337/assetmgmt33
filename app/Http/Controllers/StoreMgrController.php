<?php

namespace App\Http\Controllers;
use App\Store_stock;
use App\Requests;
use App\Indent;
use Illuminate\Http\Request;

class StoreMgrController extends Controller
{
    public function index(){
        $stock=Store_stock::all();
        $request=Requests::all();
        // return $stock;
        return view('/sm/home')->with('stock',$stock)->with('request',$request);
    }
    public function setpending(Request $request){
        // return $request;
        $req=Requests::where('id',intval($request->id))->first();
        $oindent=Indent::where('id',intval($req->indent_id))->first();
        // echo $req->indent_id;
        // return $oindent;
        $oindent->status=2;//set as approved but pending delivery
        $oindent->save();
        return redirect()->back();
        // return $request;
    }
    public function allotAsset(Request $request){
        $req=Requests::where('id',intval($request->id))->first();
        $oindent=Indent::where('id',intval($req->indent_id))->first();
        $stock=Store_stock::where('item_name',$req->item)->first();
        $stock->qty=$stock->qty - $req->qty;
        $remreq=Requests::where('item',$req->item)->get();
        foreach($remreq as $r){
            if ($r->qty > $stock->qty){
                $r->available=0;
                $r->save();
            }
        }

        $stock->save();

        $oindent->status=3;//set as approved and delivered to po
        $oindent->save();
        
        Requests::destroy(intval($request->id));
        
        return redirect()->back();
    }
}
