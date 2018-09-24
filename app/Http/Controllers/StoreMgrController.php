<?php

namespace App\Http\Controllers;
use App\Store_stock;
use App\Requests;
use Illuminate\Http\Request;

class StoreMgrController extends Controller
{
    public function index(){
        $stock=Store_stock::all();
        $request=Requests::all();
        // return $stock;
        return view('/sm/home')->with('stock',$stock)->with('request',$request);
    }
}
