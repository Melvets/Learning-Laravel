<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_model as Post;
use Database\Factories\Post_modelFactory;

class PostController extends Controller
{
    public function index()
    {
        return view('v_blog.blog', [
            'title' => 'Halaman Blog',
            'active' => 'blog',
            'dataPosts' => Post::latest()->get()
            // 'dataPosts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('v_blog.detail', [
            'title' => 'Detail Post',
            'active' => 'blog',
            'dataPost' => $post
        ]);
    }
}
