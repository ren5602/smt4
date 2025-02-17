<?php

use Illuminate\Support\Facades\Route;
// digunakan untuk membuat route resource untuk mengatur CRUD item
use App\Http\Controllers\ItemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//digunakan untuk menampilkan halaman awal
Route::get('/', function () {
    return view('welcome');
});
//route ini digunakan untuk membuat route resource untuk CRUD items
Route::resource('items', ItemController::class);
