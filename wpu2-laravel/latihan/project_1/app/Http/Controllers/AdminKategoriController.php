<?php

namespace App\Http\Controllers;

use App\Models\Kategori_model;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('v_dashboard.kategori.index', [
            'dataKategori' => Kategori_model::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori_model  $kategori_model
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_model $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori_model  $kategori_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_model $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori_model  $kategori_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_model $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori_model  $kategori_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_model $kategori)
    {
        //
    }
}
