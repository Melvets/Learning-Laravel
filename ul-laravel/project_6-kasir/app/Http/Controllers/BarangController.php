<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['barang'] = Barang::all();

        return view('v_barang.index', $data, [
            'active' => 'barang'
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = Kategori::all();

        return view('v_barang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $nama_file = time().'.'.$request->gambar->extension();

        // $request->file->move(public_path('gambar', $nama_file));

        $barang = new Barang();

        $barang->nama_barang = $request->input('nama_barang');
        $barang->kategori_id = $request->input('kategori_id');
        $barang->harga = $request->input('harga');
        $barang->jumlah_barang = $request->input('jumlah_barang');
        // $barang->gambar = $nama_file;

        $barang->save();

        return redirect('/barang');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['barang'] = Barang::find($id);
        $data['kategori'] = Kategori::all();

        return view('v_barang.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $barang->nama_barang = $request->input('nama_barang');
        $barang->kategori_id = $request->input('kategori_id');
        $barang->harga = $request->input('harga');
        $barang->jumlah_barang = $request->input('jumlah_barang');
        // $barang->gambar = $nama_file;

        $barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Barang::find($id);

        $kategori->delete();

        return redirect('/barang');
    }
}
