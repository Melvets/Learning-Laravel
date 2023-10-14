<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('v_login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
}
