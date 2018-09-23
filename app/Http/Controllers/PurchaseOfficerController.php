<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOfficerController extends Controller
{
    public function index(){
        return view('po');
    }
}
