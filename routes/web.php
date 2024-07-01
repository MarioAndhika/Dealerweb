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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/suv', function () {
    return view('suv');
})->name('suv');

Route::get('/sedan', function () {
    return view('sedan');
})->name('sedan');

Route::get('/mpv', function () {
    return view('mpv');
})->name('mpv');

Route::get('/tim', function () {
    return view('tim');
})->name('tim');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/c3', function () {
    return view('c3');
})->name('c3');

Route::get('/mg5gt', function () {
    return view('mg5gt');
})->name('mg5gt');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
