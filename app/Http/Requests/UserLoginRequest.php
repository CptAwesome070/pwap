<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserLoginRequest extends Request{

    /*
     * This will be use extensively later, to allow us to limit actions based on a users level
     */
    public function authorize(){
        return true;
    }

    /*
     * This is the validation rules used to validate the form submission
     */
    public function rules(){
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

}