<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminKategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\KategoriController;

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

// About
Route::get('/about', [AboutController::class, 'index']);

// Blog
Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

// Kategori
Route::get('/kategori', [KategoriController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function() {
    return view('v_dashboard.index');
})->middleware('auth');

// Dashboard Posts
Route::get('/dashboard/posts/checkSlug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');

// Dashboard Admin Kategori
Route::resource('/dashboard/kategori', AdminKategoriController::class)->except('show')->middleware('admin');