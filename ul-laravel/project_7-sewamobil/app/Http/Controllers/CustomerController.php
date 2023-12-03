<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('v_dashboard.v_customer.index', [
            'dataCustomer' => Customer::all(),
            'title' => 'Customer'
        ]);
    }

    public function create()
    {
        return view('v_dashboard.v_customer.create', [
            'dataMobil' => Mobil::all(),
            'title' => 'Create Customer'
        ]);
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_depan' => 'required|min:5|max:255',
            'nama_belakang' => 'required|min:5|max:255',
            'telepon' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            // 'telepon' => 'required|regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/|min:12',
            'email' => 'required|email:dns',
            'alamat' => 'required|min:5|max:255'

        ]);
        // regex:^(\+62|62|0)8[1-9][0-9]{6,9}$
        // regex:/^(\+62|0)[0-9]{9,12}$/
        // regex:/^([0-9\s\-\+\(\)]*)$/
        // regex:/^([\+62|0-9\0-9\9,12]*)$/

        Customer::create($validateData);

        return redirect('/dashboard/customer');
    }

    
    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        return view('v_dashboard.v_customer.edit', [
            'dataMobil' => Mobil::all(),
            'dataCustomer' => $customer,
            'title' => 'Edit Customer'
        ]);
    }

    public function update(Request $request, Customer $customer)
    {
        $validateData = $request->validate([
            'nama_depan' => 'required|min:5|max:255',
            'nama_belakang' => 'required|min:5|max:255',
            'telepon' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            'email' => 'required|email:dns',
            'alamat' => 'required|min:5|max:255'
        ]);

        Customer::where('id', $customer->id)->update($validateData);

        return redirect('/dashboard/customer');
    }

    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);

        return redirect('/dashboard/customer');
    }
}
