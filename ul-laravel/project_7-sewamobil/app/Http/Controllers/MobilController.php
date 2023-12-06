<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Mobil::latest();
        $count = Mobil::all()->count();

        if(request('search')) {
            $query->where('merk', 'like', '%' . request('search') . '%')
                    ->orWhere('model', 'like', '%' . request('search') . '%');
        }

        $dataMobil = $query->paginate(5);

        return view('v_dashboard.v_mobil.index', [
            'dataMobil' => $dataMobil,
            'jumlahMobil' => $count,
            'title' => 'Mobil'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v_dashboard.v_mobil.create', [
            'title' => 'Create Mobil'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun_produksi' => 'required|numeric',
            'warna' => 'required',
            'nomor_polisi' => 'required',
            'image' => 'required|image|file|max:2048'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('car-image');
        }

        Mobil::create($validateData);

        return redirect('/dashboard/mobil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        return view('v_dashboard.v_mobil.show', [
            'dataMobil' => $mobil,
            'title' => 'Detail' . ' ' . $mobil->merk . ' ' . $mobil->model
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        return view('v_dashboard.v_mobil.edit', [
            'dataMobil' => $mobil,
            'title' => 'Edit Mobil'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        $validateData = $request->validate([
            'merk' => 'required',
            'model' => 'required',
            'tahun_produksi' => 'required|numeric',
            'warna' => 'required',
            'nomor_polisi' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validateData['image'] = $request->file('image')->store('car-image');
        }

        Mobil::where('id', $mobil->id)->update($validateData);

        return redirect('/dashboard/mobil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        if($mobil->image) {
            Storage::delete($mobil->image);
        }

        Mobil::destroy($mobil->id);
        return redirect('/dashboard/mobil');
    }
}
