<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/new-login', function () {
    return view('new-login');
});

Route::get('/new-register', function () {
    return view('new-register');
});

Route::get('/', function () {
    return view('new-login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user', 'App\Http\Controllers\UserController');
Route::resource('/produk', 'App\Http\Controllers\ProdukController');


