<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\content_yt;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        return view('index',[
            'image' => $images,
            'content' => $data,

        ]);
    }
}
