<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactController extends Controller
{
    public function transaction()
    {
        return view('transaction.transaction');
    }
}
