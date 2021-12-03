<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'login'])->name('login');
Route::post('/postlogin', [AdminController::class, 'postlogin'])->name('postlogin');
Route::get('/superadmin', [AdminController::class, 'superadmin'])->name('superadmin');
Route::get('/logout', [AdminController::class, 'logout']);
Route::put('/superadmin/{id}', [AdminController::class, 'update_header']);
Route::get('/superadmin/header-slide', [AdminController::class,'header_slide']);
Route::get('/superadmin/content-yt-image', [AdminController::class,'content_yt_image']);
Route::put('/superadmin/content-yt-image/{id}', [AdminController::class, 'update_content']);
Route::get('/superadmin/berita', [AdminController::class, 'index_berita']);
Route::get('/superadmin/berita/create', [AdminController::class, 'create_berita']);
Route::post('/superadmin/berita', [AdminController::class, 'store_berita']);
Route::get('/superadmin/berita/{post:judul}',[AdminController::class, 'berita']);
Route::delete('/superadmin/berita/{post}',[AdminController::class, 'destroy']);

Route::get('/berita',[HomeController::class, 'index_berita']);
Route::get('/profile',[HomeController::class, 'profile']);
Route::get('/ppid',[HomeController::class, 'ppid']);
Route::get('/ekstra/{sakip}',[HomeController::class, 'ekstra']);
Route::get('/berita/{judul}',[HomeController::class, 'berita']);
Route::get('/superadmin/berita/edit/{id}', [AdminController::class, 'edit_berita']);
Route::put('/superadmin/berita/update/{id}', [AdminController::class, 'update_berita']);
Route::get('/superadmin/contact', [AdminController::class, 'contact']);
Route::put('/superadmin/contact/{id}', [AdminController::class, 'update_contact']);


Route::get('/superadmin/update-admin', [AdminController::class, 'userPassAdmin']);
Route::put('/superadmin/update-userPassAdmin/{id}', [AdminController::class, 'update_admin']);