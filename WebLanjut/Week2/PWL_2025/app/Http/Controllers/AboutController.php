<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return('Nama: Muhammad Nur Aziz <br>Nim: 2341720237');
    }
}
