<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Quote;
class QuoteController extends Controller
{
    function __construct() {
        $this->middleware('custom_auth');
   }
    public function index(){
        // return view('authorized.master')->with('Quotes',Quote::where('user_id',session('uid'))->paginate(20));
        return view('authorized.master')->with('Quotes',Quote::GetCurrentUsers(session('uid'))->paginate(20));    
        
    }

    public function detail($id){       
        return view('authorized.detail')->with('Quote',Quote::find($id));
    }

     public function edit($id){
        return view('authorized.edit')->with('Quote',Quote::find($id));
    }
    public function update(){
        return 'Done';
    }
     public function delete($id){
         $quote = Quote::find($id);
         if($quote!=null){
            if($quote->delete()) //Quote::destroy($id)
                return view('authorized.delete',['status'=>'success','message'=>'Deleted Successfully']);
         }
        else
            return view('authorized.delete',['status'=>'failure','message'=>'Error Occured...Please try again']);    
    }

    public function create(){
        return view('authorized.create',['uid'=>session('uid')]);
    }

    public function insert(){
        $rules = [
            'quote_text'=>'required|min:5|max:200|string'
        ];

        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $q = new Quote();
            $q->text = Input::get('quote_text');
            $q->author = Input::get('author');
            $q->user_id = session('uid');
            $q->save();
            return view('authorized.create')->with('quote_added','Quote added successfully');
        }

    }
}
