<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function join(Request $request){
        return view ('/register');
    }
    public function signUp (Request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        return view('/welcome', ['firstName'=> $firstName, 'lastName'=>$lastName]);
    }
}
