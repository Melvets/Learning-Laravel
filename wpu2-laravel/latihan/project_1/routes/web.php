<?php

use Illuminate\Support\Facades\Route;

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
    return view('v_home.home');
});

Route::get('/about', function () {
    return view('v_about.about', [
        'nama' => 'Camela Devs',
        'alamat' => 'Jalan Kesini',
        'hobi' => 'Memancing keributan',
        'img' => 'Diluc.jpg' 
    ]);
});

Route::get('/blog', function () {
    return view('v_blog.blog');
});
