<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

// MENGGUNAKAN MODEL ============================================================

class KelasController extends Controller
{

    // GET
    public function index()
    {
        $data['dataKelas'] = Kelas::get();

        // $data['dataKelas'] = $data->paginate(5);
        // dd($data['dataKelas']);

        return view('kelas.index', $data, ["title" => "Kelas"]);
    }

    // GET
    public function create()
    {
        $data['dataJurusan'] = Jurusan::get();

        return view('kelas.create', $data, ["title" => "Kelas"]);
    }

    // POST
    public function store(Request $request)
    {
        $kelas = New Kelas;

        $kelas->kelas = $request->input('inputKelas');
        $kelas->id_jurusan = $request->input('inputId_jurusan');
        $kelas->created_at = date("Y-m-d H:i:s");

        $kelas->save();

        return redirect('/sekolah/kelas');
    }

    // GET
    public function show($id)
    {
        //
    }

    // GET
    public function edit(string $id)
    {
        // $data['dataKelas'] = DB::table('kelas')->where('id', $id)->first();
        // $data['dataJurusan'] = DB::table('jurusan')->get();

        $data['id'] = $id;
        $data['dataKelas'] = Kelas::find($id);
        $data['dataJurusan'] = Jurusan::get();

        return view('kelas.edit', $data, ["title" => "Kelas"]);
    }

    // PUT / PATCH
    public function update(Request $request, string $id)
    {

        $kelas = Kelas::find($id);

        $kelas->kelas = $request->input('inputKelas');
        $kelas->id_jurusan = $request->input('inputId_jurusan');

        $kelas->save();

        // $data['kelas'] = $request->input('inputKelas');
        // $data['id_jurusan'] = $request->input('inputId_jurusan');

        // DB::table('kelas')->where('id', $id)->update($data);

        return redirect('/sekolah/kelas');
    }

    // DELETE
    public function destroy($id)
    {
        // DB::table('kelas')->where('id', $id)->delete();

        $kelas = Kelas::find($id);
        $kelas->delete();
        
        return redirect('/sekolah/kelas');
    }
}
