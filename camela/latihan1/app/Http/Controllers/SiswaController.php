<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    // GET
    public function index()
    {
        // Mengambil data dari database
        $data['datasiswa'] = DB::table('siswa')->get();

        // Menampilkan data ke view
        return view('v_siswa.index', $data, ["title" => "Data Siswa"]);
    }

    // GET
    public function create()
    {
        // Menampilkan view create
        return view('v_siswa.create', ["title" => "Create New Data"]);
    }

    // POST
    public function store(Request $request)
    {
        // Ambil data yg diinput
        $data['nama']       = $request->input('nama');
        $data['kelas']    = $request->input('kelas');
        $data['presensi']    = $request->input('presensi');
        $data['jenis_kelamin']  = $request->input('jenis_kelamin');
        $data['alamat']     = $request->input('alamat');

        // Insert ke database
        DB::table('siswa')->insert($data);

        // Kembalikan ke halaman index
        return redirect('/siswa');
    }
    // GET
    public function show(string $id)
    {
        // Menampilkan detail data
        $data['datasiswa'] = DB::table('siswa')->where('id', $id)->first();

        return view('v_siswa.show', $data, ["title" => "Detail Siswa"]);
    }
    
    // GET
    public function edit(string $id)
    {
        // Ambil data di database
        $data['id'] = $id;
        $data['datasiswa'] = DB::table('siswa')->where('id', $id)->first();

        // Masuk ke view edit
        return view('v_siswa.edit', $data, ["title" => "Edit Data Siswa"]);
    }

    // PUT / PATCH
    public function update(Request $request, string $id)
    {
        // Ambil data yang dimput user
        $data['nama']       = $request->input('nama');
        $data['kelas']    = $request->input('kelas');
        $data['presensi']  = $request->input('presensi');
        $data['jenis_kelamin']  = $request->input('jenis_kelamin');
        $data['alamat']     = $request->input('alamat');

        // update data
        DB::table('siswa')->where('id', $id)->update($data);
        
        // Kembalikan ke index
        return redirect('/siswa');
    }

    // DELETE
    public function destroy(string $id)
    {
        // Menghapus data
        DB::table('siswa')->where('id', $id)->delete();

        // Kembali ke index
        return redirect('/siswa');
    }
}
