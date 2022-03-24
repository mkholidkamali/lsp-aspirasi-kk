<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\InputAspirasiController;
use App\Http\Controllers\LoginController;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
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

// User
Route::get('/', function () {
    return view('index', [
        'kategoris' => Kategori::all()
    ]);
});
Route::get('/profile', function () {
    return view('profile');
})->name('profil');

// Input Aspirasi
Route::resource('/aspirasi',  InputAspirasiController::class);
// Aspirasi
Route::resource('/dashboard/aspirasi', AspirasiController::class);

// Admin
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Development
Route::get('/admin/index', function () {
    return view('admin.index', [
        'aspirasis' => Input_aspirasi::all()
    ]);
});