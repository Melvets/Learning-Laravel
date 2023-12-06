<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        $query = Customer::latest();
        $count = Customer::all()->count();

        if(request('search')) {
            $query->where('nama_depan', 'like', '%' . request('search') . '%')
                    ->orWhere('nama_belakang', 'like', '%' . request('search') . '%')
                    ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }

        $dataCustomer = $query->paginate(5);

        return view('v_dashboard.v_customer.index', [
            'dataCustomer' => $dataCustomer,
            'jumlahCustomer' => $count,
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
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'telepon' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            // 'telepon' => 'required|regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/|min:12',
            'email' => 'required|email:dns',
            'alamat' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ]);
        // regex:^(\+62|62|0)8[1-9][0-9]{6,9}$
        // regex:/^(\+62|0)[0-9]{9,12}$/
        // regex:/^([0-9\s\-\+\(\)]*)$/
        // regex:/^([\+62|0-9\0-9\9,12]*)$/

        $path = $request->file('image')->store('/customer_image');
        $validateData['image'] = $path;

        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('car-image');
        // }

        Customer::create($validateData);

        return redirect('/dashboard/customer');
    }

    
    public function show(Customer $customer)
    {
        return view('v_dashboard.v_customer.show', [
            'dataCustomer' => $customer,
            'title' => 'Detail' . ' ' . $customer->nama_depan . ' ' . $customer->nama_belakang
        ]);
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
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'telepon' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            'email' => 'required|email:dns',
            'alamat' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $path = $request->file('image')->store('/customer_image');
            $validateData['image'] = $path;
        }

        Customer::where('id', $customer->id)->update($validateData);

        return redirect('/dashboard/customer');
    }

    public function destroy(Customer $customer)
    {
        Storage::delete($customer->image);

        Customer::destroy($customer->id);

        return redirect('/dashboard/customer');
    }
}
