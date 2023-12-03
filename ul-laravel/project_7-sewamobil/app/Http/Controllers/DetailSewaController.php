<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Customer;
use App\Models\DetailSewa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DetailSewaController extends Controller
{
    public function index()
    {
        return view('v_dashboard.v_detailsewa.index', [
            'dataDetailSewa' => DetailSewa::all(),
            'title' => 'Detail Sewa'
        ]);
    }

    public function create()
    {
        return view('v_dashboard.v_detailsewa.create', [
            'dataCustomer' => Customer::all(),
            'dataMobil' => Mobil::all(),
            'dataDetailSewa' => DetailSewa::all(),
            'title' => 'Create Detail Sewa'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'customer_id' => 'required',
            'mobil_id' => 'required',
            'durasi_sewa' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        // $validateData['tanggal_sewa'] = Carbon::parse($validateData['tanggal_sewa'])->format('D, Y-m-d');
        // $validateData['tanggal_sewa'] instanceof \Carbon\Carbon;

        DetailSewa::create($validateData);

        return redirect('/dashboard/detailsewa');
    }

    public function show(DetailSewa $detailSewa)
    {
        //
    }

    public function edit(DetailSewa $detailSewa, $id)
    {
        return view('v_dashboard.v_detailsewa.edit', [
            'dataCustomer' => Customer::all(),
            'dataMobil' => Mobil::all(),
            'dataDetailSewa' => DetailSewa::find($id),
            'title' => 'Edit Detail Sewa'
        ]);        
    }

    public function update(Request $request, DetailSewa $detailSewa, $id)
    {

        $detailSewa = DetailSewa::find($id);

        $validateData = $request->validate([
            'customer_id' => 'required',
            'mobil_id' => 'required',
            'durasi_sewa' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'tanggal_selesai' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        DetailSewa::where('id', $detailSewa->id)->update($validateData);
        
        return redirect('/dashboard/detailsewa');
    }

    public function destroy(DetailSewa $detailSewa, $id)
    {
        $detailSewa = DetailSewa::find($id);
        DetailSewa::destroy($detailSewa->id);

        return redirect('/dashboard/detailsewa');
    }
}
