<?php

namespace App\Http\Controllers;

use App\Models\Post_model;
use App\Models\Kategori_model;
use Illuminate\Http\Request;

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
        return $request;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_model  $post_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_model $post)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post_model::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
