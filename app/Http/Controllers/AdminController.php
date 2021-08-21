<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login',[
            'title' => 'Login Form'
        ]);
    }
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('username','password'))) {
            return redirect('/');
        }
        return redirect('/admin');
    }
}
