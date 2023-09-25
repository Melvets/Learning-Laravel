<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    // GET
    public function index()
    {
        // Mengambil data dari database
        $data['dataperpus'] = DB::table('buku')->get();
        $count = DB::table('buku')->count();
        // Menampilkan data ke view
        return view('v_perpusda.index', $data, ["title" => "Data Buku", "titlePerpus" => "Perpustakaan Skanida", "count" => $count]);
    }

    // GET
    public function create()
    {
        // Menampilkan view create
        return view('v_perpusda.create', ["title" => "Tambah Buku", "titlePerpus" => "Perpustakaan Skanida"]);
    }

    // POST
    public function store(Request $request)
    {
        // Ambil data yg diinput
        $data['judul']          = $request->input('judul');
        $data['kode']           = $request->input('kode');
        $data['penulis']        = $request->input('penulis');
        $data['kategori']       = $request->input('kategori');
        $data['penerbit']       = $request->input('penerbit');
        $data['jml_halaman']    = $request->input('jml_halaman');
        $data['tahun_terbit']   = $request->input('tahun_terbit');

        // Insert ke database
        DB::table('buku')->insert($data);

        // Kembalikan ke halaman index
        return redirect('/perpustakaan');
    }
    // GET
    public function show(string $id)
    {
        // Menampilkan detail data
        $data['dataperpus'] = DB::table('buku')->where('id', $id)->first();

        return view('v_perpusda.show', $data, ["title" => "Detail Buku", "titlePerpus" => "Perpustakaan Skanida"]);
    }
    
    // GET
    public function edit(string $id)
    {
        // Ambil data di database
        $data['id'] = $id;
        $data['dataperpus'] = DB::table('buku')->where('id', $id)->first();

        // Masuk ke view edit
        return view('v_perpusda.edit', $data, ["title" => "Edit Buku", "titlePerpus" => "Perpustakaan Skanida"]);
    }

    // PUT / PATCH
    public function update(Request $request, string $id)
    {
        // Ambil data yang dimput user
        $data['judul']          = $request->input('judul');
        $data['kode']           = $request->input('kode');
        $data['penulis']        = $request->input('penulis');
        $data['kategori']       = $request->input('kategori');
        $data['penerbit']       = $request->input('penerbit');
        $data['jml_halaman']    = $request->input('jml_halaman');
        $data['tahun_terbit']   = $request->input('tahun_terbit');

        // update data
        DB::table('buku')->where('id', $id)->update($data);
        
        // Kembalikan ke index
        return redirect('/perpustakaan');
    }

    // DELETE
    public function destroy(string $id)
    {
        // Menghapus data
        DB::table('buku')->where('id', $id)->delete();

        // Kembali ke index
        return redirect('/perpustakaan');
    }
}
