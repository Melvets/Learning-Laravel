<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Kategori_model;

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

Route::get('/', function () {
    return view('v_home.home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('v_about.about', [
        'title' => 'About',
        'nama' => 'Camela Devs',
        'alamat' => 'Jalan Kesini',
        'hobi' => 'Memancing keributan',
        'img' => 'Diluc.jpg' 
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// detail blog
Route::get('blog/{post:slug}', [PostController::class, 'show']);
// kategori
Route::get('/kategori', function() {
    return view('v_kategori.kategori', [
        'title' => 'Kategori',
        'dataKategori' => Kategori_model::all()
    ]);
});

Route::get('/kategori/{kategori:slug}', function(Kategori_model $kategori) {
    return view('v_kategori.detail', [
        'title' => $kategori->nama,
        'dataPosts' => $kategori->Post_model,
        'kategori' => $kategori->nama
    ]);
});

// user
Route::get('/author/{author:username}', function(User $author) {
    return view('v_user.user', [
        'title' => 'User Post',
        'dataPosts' => $author->Post_model,
    ]);
});

