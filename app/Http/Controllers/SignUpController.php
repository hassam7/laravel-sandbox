<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SignUpRequest;

use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    //TODO: Add client side validation
    public function index(){
        return view('signup.signup');
    }

    public function create(){
          
            $rules = array(
                'inputName'=>'required|max:10|min:2|string',
                'userEmail'=>'required|max:20|min:2|email|unique:users,email',
                'userPassword'=>'required|min:6|confirmed',
                'country'=>'required'
            );

            $messages = [
                'inputName.required'=> 'We need your name',
                'inputName.max'=> 'Your name can not be greater than 20 chars',
                'country.required'=>'Your Country'
                
            ];

            $validator = Validator::make(Input::all(),$rules,$messages);

            if($validator->fails()){
                $messages = $validator->messages();
                return redirect()->back()->withErrors($validator)->withInput();
            }
            else{
                $u = new User();
                $u->name = Input::get('inputName'); 
                $u->email = Input::get('userEmail');
                $u->password = Input::get('userPassword');
                $u->country = Input::get('country');
                $u->save();    
                return view('signup.signup')->with('message','User created successfully');
                
            }
    }

/*
Validation Using FormRequest
    public function create(SignUpRequest $request){
            
        $u = new User();
        $u->name = $request->inputName;
        $u->email = $request->userEmail;
        $u->password = $request->userPassword;
        $u->country = $request->country;
        $u->save();    
        return view('signup.signup')->with('message','User created successfully');
    }
*/
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
