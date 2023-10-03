<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('blog/{slug}', [PostController::class, 'show']);