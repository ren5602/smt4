<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactController;

Route::get('/', function () {
    return view('welcome');
});
// route untuk halaman awal
Route::get('/home', [HomeController::class, 'index']);

// route untuk halaman produk harus langsung dengan prefix category ex: /category/food-beverage
Route::prefix('category')->group(function () {
    // foodbeverage harus sesuai dengan fungsi pada controller sama dengan babykid dll
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']); 
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
}); 

Route::get('/user', [UserController::class, 'profile']);
Route::get('/transact', [TransactController::class, 'transaction']);