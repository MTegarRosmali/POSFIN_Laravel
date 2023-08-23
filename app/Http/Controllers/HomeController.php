<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function berita()
    {
        return view('home.berita');
    }

    public function services()
    {
        return view('home.services');
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
