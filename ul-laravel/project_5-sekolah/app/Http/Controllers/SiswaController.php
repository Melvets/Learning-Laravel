<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    // GET
    public function index()
    {
        $data['dataSiswa'] = Siswa::get();

        return view('siswa.index', $data, ['title' => 'Siswa']);
    }

    // GET
    public function create()
    {
        $data['dataKelas'] = Kelas::get();

        return view('siswa.create', $data, ['title' => 'Siswa']);
    }

    // POST
    public function store(Request $request)
    {
        $siswa = new Siswa;

        $siswa->nama = $request->input('inputNama');
        $siswa->id_kelas = $request->input('inputId_kelas');
        $siswa->jenis_kelamin = $request->input('inputJenis_kelamin');
        $siswa->save();

        return redirect('/sekolah/siswa');
    }

    // GET
    public function show($id)
    {
        //
    }

    // GET
    public function edit($id)
    {
        $data['id'] = $id;
        $data['dataSiswa'] = Siswa::find($id);
        $data['dataKelas'] = Kelas::get();

        return view('siswa.edit', $data, ['title' => 'Siswa']);
    }

    // PUT / PATCH
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        $siswa->nama = $request->input('inputNama');
        $siswa->id_kelas = $request->input('inputId_kelas');
        $siswa->jenis_kelamin = $request->input('inputJenis_kelamin');

        $siswa->save();

        return redirect('/sekolah/siswa');
    }

    // DELETE
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/sekolah/siswa');
    }
}
