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
Route::get('/superadmin/berita/{post:slug}',[AdminController::class, 'berita']);
Route::delete('/superadmin/berita/{post}',[AdminController::class, 'destroy']);

Route::get('/berita/{post:slug}',[HomeController::class, 'berita']);
Route::get('/superadmin/berita/edit/{id}', [AdminController::class, 'edit_berita']);
Route::put('/superadmin/berita/update/{id}', [AdminController::class, 'update_berita']);