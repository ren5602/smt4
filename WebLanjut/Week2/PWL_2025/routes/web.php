<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
// basic route
Route::get('/', function () {
    return view('welcome');
});
/** 
Route::get('/hello', function () {
    return 'Hello World';
});
*/
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

/** 
Route::get('/selamatdatang', function () {
    return 'Selamat Datang';
});
*/
Route::get('/index', [WelcomeController::class,'index']);

/** 
Route::get('about', function () {
    return ('NIM: 2341720237<br>Nama: Muhammad Nur aziz');
});
*/
Route::get('about', [WelcomeController::class,'about']);

// Route Parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
/** 
Route::get('articles/{articleid}', function ($articleId) {
    return 'Halaman Artikel dengan ID ke-' . $articleId;
});
*/
Route::get('articles/{articleid}', [WelcomeController::class,'articles']);

// Route Parameter Optional
/**  
 Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
 */

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
