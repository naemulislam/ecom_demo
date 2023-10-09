<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginStore(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

    }
}
