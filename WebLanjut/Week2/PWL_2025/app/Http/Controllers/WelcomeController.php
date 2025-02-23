<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nama: Muhammad Nur Aziz <br>Nim: 2341720237';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Aziz']);
    //     }
    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Aziz')
            ->with('occupation', 'Graphic Designer');;
    }
}
