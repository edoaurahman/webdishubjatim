<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Images;
use App\Models\content_yt;
use Illuminate\Http\Request;
use App\Models\Berita_Gambar;
use App\Models\Contact;
use Illuminate\Foundation\Auth\User;
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
        $contact = Contact::find(1);
        if (session()->has('username')) {
            return view('admin.admin_index', [
                'image' => $images,
                'logout' => 'logout',
                'content' => $data,
                'post' => $post,
                'contact' => $contact,
                'admin' => 'update-admin',
                'title' => 'slide',
            ]);
        } else {
            return redirect('/admin');
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
                'logout' => 'logout',
                'title' => 'slide',
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
                'content' => $data,
                'title' => 'Youtbe And Image',

            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function index_berita()
    {
        $posts = Post::latest('tgl')->get();
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
        $post->judul = $request->judul;
        $post->isi = $request->isi;
        $post->subjudul = $request->subjudul;
        $post->tgl = $request->tgl;
        if ($request->hasFile('image')) {
            $destination = 'template/assets/img/imgnews/' . $post->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/imgnews/', $filename);
            $post->pict = $filename;
        }
        $post->save();

        return redirect('superadmin/berita')->with('status', 'Berita Telah Tersimpan');
    }

    public function berita(Post $post)
    {   
        $post->latest('tgl')->get();
        if (session()->has('username')) {
            return view('admin.berita.post', compact('post'));
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }
    public function update_berita(Request $request, $id)
    {
        $post = Post::find($id);
        $post->judul = $request->judul;
        $post->isi = $request->isi;
        $post->subjudul = $request->subjudul;
        $post->tgl = $request->tgl;
        if ($request->hasFile('image')) {
            $destination = 'template/assets/img/imgnews/' . $post->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('template/assets/img/imgnews/', $filename);
            $post->pict = $filename;
        }
        $post->save();
        return redirect('superadmin/berita')->with('status', 'Berita Berhasil Di Update');
    }

    public function edit_berita($id)
    {
        $post = Post::where('id_news',$id)->get();
        if (session()->has('username')) {
            return view('admin.berita.edit', compact('post'));
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id_news);
        return redirect('/superadmin/berita')->with('status', 'Berita Berhasil di Hapus');
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



    //ubah username dan password admin


    public function userPassAdmin()
    {
        $admin = User::find(1);
        if (session()->has('username')) {
            return view('admin.update-admin', [
                'admin' => $admin,
            ]);
        } else {
            return view('admin.login', [
                'title' => 'Login Form'
            ]);
        }
    }

    public function update_admin(Request $request, $id)
    {
        $admin = User::find($id);
        $password = $request->input('password');
        $admin->username = $request->input('username');
        $admin->timestamps = false;
        $admin->password = bcrypt($password);
        $admin->save();
        return redirect('superadmin/update-admin')->with('status', 'Username And Password Update Successfully');
    }
}
