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
        $contact = Contact::find(1);
        return view('index',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'contact' => $contact,
            'title' => "Dinas Perhubungan Provinsi Jawa Timur"


        ]);
    }
    public function berita($judul)
    {
        $post = Post::where('judul' , $judul)->get();
        return view('berita.post', compact('post'));
    }

    public function profile()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        $post = Post::latest('tgl')->get();
        $contact = Contact::find(1);
        return view('profile',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'contact' => $contact,
            'title' => "Profile Dinas Perhubungan Provinsi Jawa Timur"

        ]);
    }

    public function index_berita()
    {
        $post = Post::latest('tgl')->get();
        $contact = Contact::find(1);
        return view('berita.index',[
            'post' => $post,
            'contact' => $contact,

        ]);
    }
}   
