<?php

namespace App\Http\Controllers;

use App\Models\content_yt;
use App\Models\Images;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function login()
    {
        if (session()->has('username')) {
            return redirect('superadmin');
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            $data = $request->input();
            $request->session()->put('username', $data['username']);
            return redirect('/superadmin');
        }

        return redirect('/admin');
    }
    public function superadmin()
    {
        $images = Images::find(1);
        $data = content_yt::find(1);
        $post = Post::all();
        if (session()->has('username')) {
            return view('admin.admin_index', [
                'image' => $images,
                'logout' =>'logout',
                'content' => $data,
                'post' => $post,
            ]);
        } else {
            return view('admin.login', [
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

    public function update_header(Request $request, $id)
    {
        $slide = Images::find($id);
        if ($request->hasFile('slide1')) {
            $destination = 'template/assets/img/slide/' . $slide->slide1;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('slide1');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/slide/', $filename);
            $slide->slide1 = $filename;
        }
        if ($request->hasFile('slide2')) {
            $destination = 'template/assets/img/slide/' . $slide->slide2;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('slide2');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/slide/', $filename);
            $slide->slide2 = $filename;
        }
        if ($request->hasFile('slide3')) {
            $destination = 'template/assets/img/slide/' . $slide->slide3;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('slide3');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/slide/', $filename);
            $slide->slide3 = $filename;
        }
    }

    public function update_content(Request $request, $id)
    {
        $content = content_yt::find($id);
        $content->yt = $request->input('yt');
        if ($request->hasFile('img_kepala_dishub')) {
            $destination = 'template/assets/img/content/' . $content->img_kepala_dishub;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img_kepala_dishub');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/content/', $filename);
            $content->img_kepala_dishub = $filename;
        }
        $content->save();
        return redirect('superadmin/content-yt-image')->with('status', 'Youtube And Image Update Successfully');
    }
    public function header_slide()
    {
        $images = Images::find(1);
        if (session()->has('username')) {
            return view('admin.header_edit', [
                'image' => $images,
                'logout' =>'logout',
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function content_yt_image()
    {
        $data = content_yt::find(1);
        if (session()->has('username')) {
            return view('admin.content-yt-img', [
               'content' => $data
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function index_berita()
    {
        $posts = Post::all();
        if (session()->has('username')) {
            return view('admin.berita.posts', [
                'posts' => $posts,
                'title' => 'Tambah Dan Update Berita',
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function create_berita()
    {
        if (session()->has('username')) {
            return view('admin.berita.create', [
                'title' => 'Tambah Dan Update Berita',
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function store_berita(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('template/assets/img/berita/', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('superadmin/berita/create')->with('status', 'Berita Telah Tersimpan');
    }

    public function berita(Post $post)
    {
        if (session()->has('username')) {
            return view('admin.berita.post', [
                'post' => $post,
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }
    public function update_berita(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        if ($request->hasFile('image')) {
            $destination = 'template/assets/img/berita/' . $post->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/berita/', $filename);
            $post->image = $filename;
        }
        $post->save();
        return redirect('superadmin/berita')->with('status', 'Berita Berhasil Di Update');
    }

    public function edit_berita($id)
    {
        $post = Post::find($id);
        if (session()->has('username')) {
            return view('admin.berita.edit', [
                'post' => $post,
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }
}
