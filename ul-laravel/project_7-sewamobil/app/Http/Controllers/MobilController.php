<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('v_dashboard.v_mobil.index', [
            'dataMobil' => Mobil::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v_dashboard.v_mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'merk' => 'required|unique:mobil',
            'model' => 'required',
            'tahun_produksi' => 'required',
            'warna' => 'required',
            'nomor_polisi' => 'required'
        ]);

        Mobil::create($validateData);

        return redirect('/dashboard/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil, $id)
    {

        // dd($mobil);
        return view('v_dashboard.v_mobil.edit', [
            'dataMobil' => Mobil::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        //
    }
}
