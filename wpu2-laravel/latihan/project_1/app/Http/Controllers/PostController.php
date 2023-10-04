<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_model as Post;

class PostController extends Controller
{
    public function index()
    {
        return view('v_blog.blog', [
            'title' => 'Blog',
            'dataPosts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('v_blog.detail', [
            'title' => 'Detail Post',
            'post' => $post
        ]);
    }
}
