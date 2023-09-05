<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    // GET
    public function index()
    {
        // Mengambil data dari database
        $data['datapegawai'] = DB::table('pegawai')->get();

        // Menampilkan data ke view
        return view('v_pegawai.index', $data);
    }

    // GET
    public function create()
    {
        // Menampilkan view create
        return view('v_pegawai.create');
    }

    // POST
    public function store(Request $request)
    {
        // Ambil data yg diinput
        $data['nama']       = $request->input('nama');
        $data['jabatan']    = $request->input('jabatan');
        $data['tgl_lahir']  = $request->input('tgl_lahir');
        $data['alamat']     = $request->input('alamat');

        // Insert ke database
        DB::table('pegawai')->insert($data);

        // Kembalikan ke halaman index
        return redirect('/pegawai');
    }
    // GET
    public function show(string $id)
    {
        // 
    }
    
    // GET
    public function edit(string $id)
    {
        // Ambil data di database
        $data['id'] = $id;
        $data['datapegawai'] = DB::table('pegawai')->where('id', $id)->first();

        // Masuk ke view edit
        return view('v_pegawai.edit', $data);
    }

    // PUT / PATCH
    public function update(Request $request, string $id)
    {
        // 
        $data['nama']       = $request->input('nama');
        $data['jabatan']    = $request->input('jabatan');
        $data['tgl_lahir']  = $request->input('tgl_lahir');
        $data['alamat']     = $request->input('alamat');

        DB::table('pegawai')->where('id', $id)->update($data);

        return redirect('/pegawai');
    }

    // DELETE
    public function destroy(string $id)
    {
        // 
    }
}
