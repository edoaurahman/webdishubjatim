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
            'header' => "true",
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

    public function ppid()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        $post = Post::latest('tgl')->get();
        $contact = Contact::find(1);
        return view('ppid',[
            'image' => $images,
            'content' => $data,
            'post' => $post,
            'contact' => $contact,
            'title' => "PPID"

        ]);
    }

    public function ekstra($sakip)
    {   
        $images = Images::find(1);
        $post = Post::latest('tgl')->get();
        if ($sakip == "IKU-2019-2024"){
            return view('ekstra.iku-2019-2024',[
            'image' => $images,
            'post' => $post,
            'title' => "SAKIP"
            ]);
        }elseif($sakip == "IKU-2014-2019"){
            return view('ekstra.iku-2014-2019',[
                'image' => $images,
                'post' => $post,
                'title' => "SAKIP"
                ]);
        }elseif($sakip == "LKJIP2020"){
            return view('ekstra.lkjip2020',[
                'image' => $images,
                'post' => $post,
                'title' => "SAKIP"
                ]);
        }elseif($sakip == "LKJIP2019"){
            return view('ekstra.lkjip2019',[
                'image' => $images,
                'post' => $post,
                'title' => "SAKIP"
                ]);
        }       
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
