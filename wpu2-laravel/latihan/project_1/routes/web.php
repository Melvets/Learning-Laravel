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

Route::get('/blog', function () {
    $blog_posts = [
        [    
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Author 1",
            "body" => "1Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ],
        [    
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Author 2",
            "body" => "2Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ]
    ];
    return view('v_blog.blog', [
        'title' => 'Blog',
        'dataPosts' => $blog_posts
    ]);
});

// detail blog
Route::get('blog/{slug}', function($slug) {
    $blog_posts = [
        [    
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Author 1",
            "body" => "1Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ],
        [    
            "title" => "Judul Post 2",
            "slug" => "judul-post-2",
            "author" => "Author 2",
            "body" => "2Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quibusdam maiores, impedit temporibus officia veniam! Perferendis deserunt fugiat sit provident veritatis beatae aut veniam eum? Laboriosam illo maxime labore officia ipsa quaerat maiores impedit ea. Voluptas nostrum molestias beatae necessitatibus ipsa, voluptatum expedita corporis veniam recusandae error laboriosam aliquid suscipit dolorem vero architecto, provident vitae iure assumenda esse. Sequi ex quia, facere minima repudiandae repellat provident earum aut sint, recusandae, maxime unde inventore ut nobis placeat? Atque, magni asperiores ipsa blanditiis unde ipsum recusandae est doloribus id nisi, dicta velit reprehenderit minus harum magnam facilis facere illum at ea! Ipsum."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if( $post["slug"] === $slug ) {
            $new_post = $post;
        }
    }

    return view('v_blog.detail', [
        'title' => 'Detail Post',
        'post' => $new_post
    ]);
});