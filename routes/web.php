<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('login',[LoginController::class,'login'])->name('login');

Route::post('login',[LoginController::class,'proses_login'])->name('login.auth');

Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::get('/', function () {return view('welcome');});

Route::get('/profil', function () {return view('profilKami');});
Route::get('/profil-bisnis', function () {return view('bisnisKami');});
Route::get('/profil-bisnis-epc', function () {return view('bisnisKami-epc');});
Route::get('/profil-susunan', function () {return view('susunanPengurus');});
Route::get('/profil-struktur', function () {return view('strukturPerusahaan');});
Route::get('/profil-sertifikat', function () {return view('sertifikat');}); 

Route::resource('/admin/berita',BeritaController::class);
Route::get('/berita', [HomeController::class, 'berita'] );

Route::get('/infoInvestor', function () {return view('investor-info');});
Route::get('/pemegangSaham', function () {return view('investor-saham');});
Route::get('/investorLaporan', function () {return view('investor-laporan');});
Route::get('/projek', function () {return view('portofolio-projek');});
Route::get('/kontak', function () {return view('kontakKami');});
Route::get('/admin', function () {return view('admin.dashboard');});


// link route english
Route::get('/home', [HomeController::class, 'home'])->name('home');