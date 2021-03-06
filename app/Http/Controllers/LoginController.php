<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\Validator;

use App\User;
class LoginController extends Controller
{
    //
    public function index(){
        if(session('loggedin')==true){
            return redirect()->route('home');
        }
        return view('login.login');
    }

    public function logoff(){
        session(['loggedin'=>false]);
        return redirect('/');
    }
    public function login(){
        $rules = [
                'userEmail'=>'required|email',
                'userPassword'=>'required',
            ];

        $validator = Validator::make(Input::all(),$rules);
        $email = Input::get('userEmail');
        $password = Input::get('userPassword');
        $temp = User::where('email',$email)->where('password',$password)->first();

       
        if($temp != null){
            session(['loggedin'=>true,'uid'=>$temp->id]);
            return redirect()->route('home');
            
        }else{
          return view('login.login')->withErrors("Invalid Username or Password<br/>Try Again");
        }
    }
}
