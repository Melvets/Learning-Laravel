<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('v_blog.blog', [
            'title' => 'Blog',
            'dataPosts' => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('v_blog.detail', [
            'title' => 'Detail Post',
            'post' => Post::find($slug)
        ]);
    }
}
