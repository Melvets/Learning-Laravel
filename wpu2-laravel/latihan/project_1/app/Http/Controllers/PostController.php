<?php

namespace App\Http\Controllers;

use App\Models\Kategori_model;
use Illuminate\Http\Request;
use App\Models\Post_model as Post;
use App\Models\User;
use Database\Factories\Post_modelFactory;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if( request('kategori') ) {
            $kategori = Kategori_model::firstWhere('slug', request('kategori'));
            $title = ' in ' . $kategori->nama;
        }

        if( request('author') ) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('v_blog.blog', [
            'title' => 'All Posts' . $title,
            'active' => 'blog',
            'dataPosts' => Post::latest()->filter(request(['search', 'kategori', 'author']))->paginate(7)->withQueryString()
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
