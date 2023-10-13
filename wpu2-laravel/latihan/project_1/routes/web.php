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
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('v_about.about', [
        'title' => 'About',
        'active' => 'about',
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
        'active' => 'kategori',
        'dataKategori' => Kategori_model::all()
    ]);
});

