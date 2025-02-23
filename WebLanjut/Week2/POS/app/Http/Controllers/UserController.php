<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.user-profile')
            ->with('id', '1')
            ->with('name', 'Aziz');
    }
}
