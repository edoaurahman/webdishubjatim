<?php

namespace App\Http\Controllers;

use App\Models\Berita_Gambar;
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
        $post = Post::latest()->get();
        $slide= Berita_Gambar::latest()->get();
        $contact = Contact::find(1);
        return view('index',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'slide_berita' => $slide,
            'contact' => $contact,

        ]);
    }
    public function berita(Post $post)
    {
        return view('berita.post', [
                'post' => $post,
            ]);
    }
}
