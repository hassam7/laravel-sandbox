<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SignUpRequest;
class SignUpController extends Controller
{
    //
    public function index(){
        return view('signup.signup');
    }

    public function create(SignUpRequest $request){
        
        $u = new User();
        $u->name = $request->inputName;
        $u->email = $request->userEmail;
        $u->password = $request->userPassword;
        $u->country = $request->country;
        $u->save();    
        return view('signup.signup')->with('message','User created successfully');
    }


    /*
        Validation using auto redirect with manually writing to model
        
        public function create(Request $request){
            $temp = $this->validate($request,[
                'inputName'=>'required|max:10|min:2|string',
                'userEmail'=>'required|max:20|min:2|email|unique:users,email',
                'userPassword'=>'required|min:6|confirmed',
                'country'=>'required'
            ]);
            $u = new User();
            $u->name = $request->inputName;
            $u->email = $request->userEmail;
            $u->password = $request->userPassword;
            $u->country = $request->country;
            $u->save();    
            return view('signup.signup')->with('message','User created successfully');
        }

    */
}
