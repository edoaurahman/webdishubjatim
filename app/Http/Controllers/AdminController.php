<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Images;
use App\Models\content_yt;
use Illuminate\Http\Request;
use App\Models\Berita_Gambar;
use App\Models\Contact;
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
        $post = Post::latest()->get();
        $slide_berita = Berita_Gambar::latest()->get();
        $contact = Contact::find(1);
        if (session()->has('username')) {
            return view('admin.admin_index', [
                'image' => $images,
                'logout' =>'logout',
                'content' => $data,
                'post' => $post,
                'slide_berita' => $slide_berita,
                'contact' => $contact,
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
        $slide->save();
        return redirect('superadmin/header-slide')->with('status', 'Slide Update Successfully');
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

    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/superadmin/berita')->with('status', 'Berita Berhasil di Hapus');
    }

    public function berita_gambar()
    {
        $slide_berita = Berita_Gambar::all();
        return view('admin.berita.gambar',[
            'gambar_slide' => $slide_berita,
        ]);
    }

    // public function store_gambar_berita(Request $request)
    // {
    //     $img = new Berita_Gambar();
    //     $img->header = $request->input('header');
    //     $img->isi = $request->input('isi');
    //     if ($request->hasFile('image')) 
    //     {
    //         $file = $request->file('image');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('template/assets/img/berita/gambar/', $filename);
    //         $img->gambar = $filename;
    //     }
    //     $img->save();
    //     return redirect('/superadmin/berita-gambar')->with('status', 'Slide Gambar Berita Telah Tersimpan');
    // }

    public function edit_gambar_berita($id)
    {
        $slide = Berita_Gambar::find($id);
        if (session()->has('username')) {
            return view('admin.berita.edit-gambar', [
                'slide_gambar' => $slide,
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function update_gambar_berita(Request $request, $id)
    {
        $slide = Berita_Gambar::find($id);
        $slide->header = $request->input('header');
        $slide->isi = $request->input('isi');
        if ($request->hasFile('image')) {
            $destination = 'template/assets/img/berita/gambar/' . $slide->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/berita/gambar/', $filename);
            $slide->gambar = $filename;
        }
        $slide->save();
        return redirect('/superadmin/berita-gambar')->with('status', 'Slide Gambar Berita Telah Terupdate');
        
    }
    public function contact()
    {
        $contact = Contact::find(1);
        if (session()->has('username')) {
            return view('admin.contact-edit', [
                'contact' => $contact,
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function update_contact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->email = $request->input('email');
        $contact->nomer = $request->input('nomer');
        $contact->fax = $request->input('fax');
        
        $contact->save();
        return redirect('superadmin/contact')->with('status', 'Contact Update Successfully');
    }
}
