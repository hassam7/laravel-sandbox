<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputName'=>'required|max:10|min:2|string',
            'userEmail'=>'required|max:20|min:2|email|unique:users,email',
            'userPassword'=>'required|min:6|confirmed',
            'country'=>'required'
        ];
    }
    public function messages(){
        return [
            'inputName.required'=> 'We need your name',
            'inputName.max'=> 'Your name can not be greater than 20 chars',
            'country.required'=>'Your Country'
        ];
    }
}
