<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Bisa tambahkan data tambahan jika diperlukan
        $welcomeMessage = "Selamat Datang di Aplikasi Galeri Sekolah!";
        
        // Tampilkan view 'home'
        return view('home.index', compact('welcomeMessage'));
    }
}
