<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Images;
use App\Models\content_yt;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        $post = Post::latest('tgl')->get();
        $slide_berita= Post::latest('tgl')->get();
        $contact = Contact::find(1);
        return view('index',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'slide_berita' => $slide_berita,
            'contact' => $contact,

        ]);
    }
    public function berita($judul)
    {
        $post = Post::where('judul' , $judul)->get();
        return view('berita.post', compact('post'));
    }

    public function index_berita()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        $post = Post::latest('tgl')->get();
        $slide_berita= Post::latest('pict')->get();
        $contact = Contact::find(1);
        return view('berita.index',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'slide_berita' => $slide_berita,
            'contact' => $contact,

        ]);
    }
}   
