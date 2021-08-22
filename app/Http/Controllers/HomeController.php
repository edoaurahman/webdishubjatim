<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $images = Images::find(1);
        // dd($images);
        return view('index',[
            'image' => $images,
        ]);
    }
}
