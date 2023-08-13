<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Memindahkan halaman 

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "nama" => "Camela Devs",
        "email" => "cameladevs@gmail.com",
        "img" => "Keqing.jpg"
    ]);
});

//Menggunakan Controller (mempersingkat baris code)
Route::get('/posts', [PostController::class, 'index']);
// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

//Categories
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->nama,
        'post' => $category->posts,
        'category' => $category->name
    ]);
});

//Menampilkan postingan sesuai user
Route::get('/authors/{user}', function(User $user){
    return view('posts',[
        'title' => 'User Posts',
        'post' => $user->posts,
    ]);
});
