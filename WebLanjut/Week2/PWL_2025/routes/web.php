<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;

// basic route
Route::get('/', function () {
    return view('welcome');
});
/** 
Route::get('/hello', function () {
    return 'Hello World';
});
 */
Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/world', function () {
//     return 'World';
// });

/** 
Route::get('/selamatdatang', function () {
    return 'Selamat Datang';
});
 */
// Route::get('/index', [WelcomeController::class,'index']);

/** 
Route::get('about', function () {
    return ('NIM: 2341720237<br>Nama: Muhammad Nur aziz');
});
 */
// Route::get('about', [WelcomeController::class,'about']);

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
// Route::get('articles/{articleid}', [WelcomeController::class,'articles']);

// Route Parameter Optional
/**  
 Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});
 */

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// modifikasi route controller
Route::get('/index', [HomeController::class, 'index']);
Route::get('articles/{articleid}', [ArticleController::class, 'articles']);
Route::get('about', [AboutController::class, 'about']);

// resource controller
Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index',
//     'show'
// ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create',
//     'store',
//     'update',
//     'destroy'
// ]);

// Membuat view
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Aziz']);
// });
// modifikasi view directory
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Aziz']);
// });
// modifikasi view via controller
Route::get('/greeting', [WelcomeController::class,'greeting']);
