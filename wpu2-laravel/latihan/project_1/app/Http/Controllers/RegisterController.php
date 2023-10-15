<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('v_register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:5|alpha',
            'username' => 'required|unique:users|min:3|max:10',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session();
        // $request->flash('success', 'Registrasi berhasil! Silahkan login kembali!');

        return redirect('/login')->with('success', 'Registrasi berhasil! Login');
    }
}
