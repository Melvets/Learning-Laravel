<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_model;

class KategoriController extends Controller
{
    public function index()
    {
        return view('v_kategori.kategori', [
            'title' => 'Kategori',
            'active' => 'kategori',
            'dataKategori' => Kategori_model::all()
        ]);
    }
}
