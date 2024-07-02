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

Route::get('/wuling', function () {
    return view('wuling');
})->name('wuling');

Route::get('/Chery Tnggo 8 pro', function () {
    return view('Chery Tnggo 8 pro');
})->name('Chery Tnggo 8 pro');

Route::get('/Mazda CX-30', function () {
    return view('Mazda CX-30');
})->name('Mazda CX-30');

Route::get('/NissanLivina', function () {
    return view('NissanLivina');
})->name('NissanLivina');

Route::get('/Lexus Ls', function () {
    return view('Lexus Ls');
})->name('Lexus Ls');

Route::get('/bmw', function () {
    return view('bmw');
})->name('bmw');

Route::get('/HR-V', function () {
    return view('HR-V');
})->name('HR-V');

Route::get('/mercedes', function () {
    return view('mercedes');
})->name('mercedes');

Route::get('/Alphar', function () {
    return view('Alphar');
})->name('Alphar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
