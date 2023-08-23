<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function profil()
    {
        return view('home.profil');
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function berita()
    {
        return view('home.berita');
    }

    public function produk()
    {
        return view('home.produk');
    }
    
    public function direksi()
    {
        return view('home.direksi');
    }

    public function core()
    {
        return view('home.core');
    }
}
