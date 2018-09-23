<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreMgrController extends Controller
{
    public function index(){
        return view('sm');
    }
}
