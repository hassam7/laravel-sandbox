<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function index(){
        return view('signup.signup');
    }

    public function create(){
       
       
        return view('signup.signup');
    }
}
