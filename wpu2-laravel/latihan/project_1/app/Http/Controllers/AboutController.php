<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('v_about.about', [
            'title' => 'About',
            'active' => 'about',
            'nama' => 'Camela Devs',
            'alamat' => 'Jalan Kesini',
            'hobi' => 'Memancing keributan',
            'img' => 'default.jpg' 
        ]);
    }
}
