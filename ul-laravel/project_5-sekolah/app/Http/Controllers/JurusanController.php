<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// MENGGUNAKAN DB ============================================================

class JurusanController extends Controller
{

    // GET
    public function index()
    {
        $data['dataJurusan'] = DB::table('jurusan')->paginate(5);

        return view('jurusan.index', $data, ["title" => "Jurusan"]);
    }

    // GET
    public function create()
    {
        return view('jurusan.create', ["title" => "Jurusan"]);
    }

    // POST
    public function store(Request $request)
    {
        $data['jurusan'] = $request->input('inputJurusan');
        $data['created_at'] = date('Y-m-d H:i:s');

        DB::table('jurusan')->insert($data);

        return redirect('/sekolah/jurusan');
    }

    // GET
    public function show($id)
    {
        //
    }

    // GET
    public function edit(string $id)
    {
        $data['id'] = $id;
        $data['dataJurusan'] = DB::table('jurusan')->where('id', $id)->first();

        return view('jurusan.edit', $data, ["title" => "Jurusan"]);
    }

    // PUT / PATCH
    public function update(Request $request, string $id)
    {
        $data['jurusan'] = $request->input('inputJurusan');

        DB::table('jurusan')->where('id', $id)->update($data);

        return redirect('/sekolah/jurusan');
    }

    // DELETE
    public function destroy($id)
    {
        DB::table('jurusan')->where('id', $id)->delete();

        return redirect('/sekolah/jurusan');
    }
}
