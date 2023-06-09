<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login',[
            'title' => 'Log In | Monev',
            'name' => 'My Site'
        ]);
    }
}
