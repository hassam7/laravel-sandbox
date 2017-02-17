<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function index(){
        return view('signup.signup');
    }

    public function create(Request $request){
        $temp = $this->validate($request,[
            'inputName'=>'required|max:10|min:2|string',
            'userEmail'=>'required|max:20|min:2|email|distinct',
            'userPassword'=>'required|min:6',
            'country'=>'required'
        ]);
       
        // return view('signup.signup');
    }
}