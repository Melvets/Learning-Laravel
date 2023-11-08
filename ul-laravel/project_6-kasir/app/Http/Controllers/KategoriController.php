<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
        $data['kategori'] = Kategori::all();

        return view('v_kategori.index', $data);
    }

    public function create()
    {
        return view('v_kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();

        $kategori->nama_kategori = $request->input('kategori');
        $kategori->created_at = date('Y-m-d H:i:s');

        $kategori->save();

        return redirect('/kategori');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['kategori'] = Kategori::find($id);

        return view('v_kategori.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        $kategori->nama_kategori = $request->input('kategori');
        $kategori->updated_at = date('Y-m-d H:i:s');

        $kategori->save();

        return redirect('/kategori');
    }

    public function destroy($id)
    {
        //
    }
}
