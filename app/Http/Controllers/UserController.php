<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Indent;
=======

>>>>>>> d360023cbe9d7b60c27642ad6a2c723e66edd221
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
<<<<<<< HEAD
        return view('user/Dashboard');
    }
    public function requestasset(Request $request){
        return view('user/AssetRequest');

    }

    public function postindent(Request $request){
        $indent=new Indent();
        $indent->user_id=\Auth::user()->id;
        $indent->item=$request->input('item');
        $indent->qty=$request->input('qty');
        $indent->department=\Auth::user()->department;
        $indent->status=0;
        $indent->save();
        return redirect()->back();
    }
    public function viewindents(){
        $indents=Indent::where('user_id',\Auth::user()->id)->get();
        return view('user/user_request')->with('indents',$indents);
=======
        return view('user');
>>>>>>> d360023cbe9d7b60c27642ad6a2c723e66edd221
    }
}
