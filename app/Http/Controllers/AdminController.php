<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        if (session()->has('username')) {
            return redirect('superadmin');
        }else{
        return view('admin.login',[
            'title' => 'Login Form'
        ]);
        }
        
    }

    public function postlogin(Request $request){
        if (Auth::attempt($request->only('username','password'))) {
            $data = $request->input();
            $request->session()->put('username',$data['username']);
            return redirect('/superadmin');
        }
        
        return redirect('/admin');
    }
    public function superadmin()
    {
        $images = Images::all();
        if (session()->has('username')) {
            return view('admin.admin_index',[
                'image' => $images
            ]);
        }else{
        return view('admin.login',[
            'title' => 'Login Form'
        ]);
        }
        
    }
    
    public function logout()
    {
        if (session()->has('username')) {
            session()->pull('username');
        }
        return redirect('admin');
    }
}
