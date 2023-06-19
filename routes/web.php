<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/profil', function () {return view('profilKami');});
Route::get('/profil-bisnis', function () {return view('bisnisKami');});
Route::get('/profil-susunan', function () {return view('susunanPengurus');});
Route::get('/profil-struktur', function () {return view('strukturPerusahaan');});

Route::resource('/admin/berita',BeritaController::class);

Route::get('/projek', function () {return view('portofolio-projek');});
Route::get('/kontak', function () {return view('kontakKami');});
Route::get('/admin', function () {return view('admin.dashboard');});


// link route english
Route::get('/home', [HomeController::class, 'home'])->name('home');