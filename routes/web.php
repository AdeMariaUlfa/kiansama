<?php

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
Route::get('/profil-direksi', function () {return view('dewanDireksi');});
Route::get('/profil-komisaris', function () {return view('dewanKomisaris');});
Route::get('/profil-struktur', function () {return view('strukturPerusahaan');});

Route::get('/kontak', function () {return view('kontakKami');});


// link route english
Route::get('/home', [HomeController::class, 'home'])->name('home');