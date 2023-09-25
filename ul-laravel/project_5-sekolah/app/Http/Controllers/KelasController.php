<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\Key;

class KelasController extends Controller
{
    public function index()
    {
        $data['dataKelas'] = Kelas::get();

        // $data['dataKelas'] = $data->paginate(5);
        // dd($data['dataKelas']);

        return view('kelas.index', $data, ["title" => "Kelas"]);
    }

    public function create()
    {
        $data['dataJurusan'] = DB::table('jurusan')->get();

        return view('kelas.create', $data, ["title" => "Kelas"]);
    }

    public function store(Request $request)
    {
        $kelas = New Kelas;

        $kelas->kelas = $request->input('inputKelas');
        $kelas->id_jurusan = $request->input('inputId_jurusan');
        $kelas->created_at = date("Y-m-d H:i:s");

        $kelas->save();

        return redirect('/sekolah/kelas');
    }

    public function show($id)
    {
        //
    }

    public function edit(string $id)
    {
        $data['id'] = $id;
        $data['dataKelas'] = DB::table('kelas')->where('id', $id)->first();
        $data['dataJurusan'] = DB::table('jurusan')->get();

        return view('kelas.edit', $data, ["title" => "Kelas"]);
    }

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

    public function destroy($id)
    {
        DB::table('kelas')->where('id', $id)->delete();

        return redirect('/sekolah/kelas');
    }
}
