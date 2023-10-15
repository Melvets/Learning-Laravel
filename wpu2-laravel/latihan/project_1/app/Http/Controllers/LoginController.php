<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create ()
    {
        return view('v_login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
}
