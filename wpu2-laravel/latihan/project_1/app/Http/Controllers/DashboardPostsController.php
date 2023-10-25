<?php

namespace App\Http\Controllers;

use App\Models\Post_model;
use App\Models\Kategori_model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post_model::where('user_id', auth()->id())->get();
        return view('v_dashboard.posts.index', [
            'dataPosts' => Post_model::where('user_id', auth()->id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v_dashboard.posts.create', [
            'dataKategori' => Kategori_model::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:post',
            'kategori_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post_model::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post_model  $post_model
     * @return \Illuminate\Http\Response
     */
    public function show(Post_model $post)
    {
        return view('v_dashboard.posts.show', [
            'dataPost' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post_model  $post_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_model $post)
    {
        return view('v_dashboard.posts.edit', [
            'dataPost' => $post,
            'dataKategori' => Kategori_model::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post_model  $post_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post_model $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'body' => 'required'
        ];

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:post';
        }

        $validatedData = $request->validate($rules); 

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post_model::where('id', $post->id)
                -> update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_model  $post_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_model $post)
    {
        Post_model::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleteed!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post_model::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
