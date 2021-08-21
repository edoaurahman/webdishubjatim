<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $images = Images::all();
        // dd($images);
        return view('index',[
            'image' => $images,
        ]);
    }
}
