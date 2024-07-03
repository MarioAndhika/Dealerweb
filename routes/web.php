<?php

use App\Http\Controllers\Admin\Car;
use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

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

Route::group([
    'prefix' => 'admin',
    'middleware' => [Authenticate::class, IsAdmin::class]
], function () {
    Route::get('/', [Dashboard::class, 'index'])->name('Admin.Dashboard');
    Route::get('/transaction/{id}', [Dashboard::class, 'edit'])->name('Admin.Edit');
    Route::post('/transaction/{id}', [Dashboard::class, 'process'])->name('Admin.Save');
    Route::delete('/transaction/{id}', [Dashboard::class, 'delete'])->name('Admin.Delete');

    Route::resource('category', Category::class);
    Route::resource('car', Car::class);
});

Route::get('/{slug}', [HomeController::class, 'detail'])->name('car.detail');
Route::post('/{slug}', [HomeController::class, 'process'])->name('car.process');
