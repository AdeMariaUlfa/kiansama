<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;

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
Route::get('/profil-bisnis-services', function () {return view('bisnisKami-services');});
Route::get('/profil-bisnis-trading', function () {return view('bisnisKami-trading');});
Route::get('/profil-bisnis-product', function () {return view('bisnisKami-product');});
Route::get('/profil-susunan', function () {return view('susunanPengurus');});
Route::get('/profil-struktur', function () {return view('strukturPerusahaan');});
Route::get('/profil-sertifikat', function () {return view('sertifikat');}); 

Route::resource('/admin/berita',BeritaController::class);
Route::resource('/admin/portofolio',PortofolioController::class);
Route::get('/berita', [HomeController::class, 'berita'] );
Route::get('/admin/portofolio/{id}/hapus-dokumentasi',[PortofolioController::class,'destroyDokumentasi'])->name('hapus-dokumentasi');
Route::post('/admin/portofolio/{id}/tambah-dokumentasi',[PortofolioController::class,'tambahDokumentasi'])->name('tambah-dokumentasi');

Route::get('/projek',[PortofolioController::class, 'landing']);
Route::get('/infoInvestor', function () {return view('investor-info');});
Route::get('/pemegangSaham', function () {return view('investor-saham');});
Route::get('/investorLaporan', function () {return view('investor-laporan');});
Route::get('/projek', function () {return view('portofolio-projek');});
Route::get('/kontak', function () {return view('kontakKami');});
Route::get('/admin', function () {return view('admin.dashboard');});


// link route english
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/ourProfile', [HomeController::class, 'profile'])->name('profile');
Route::get('/structure', [HomeController::class, 'structure'])->name('structure');
Route::get('/board', [HomeController::class, 'board'])->name('board');
Route::get('/certificate', [HomeController::class, 'certificate'])->name('certificate');
Route::get('/business', [HomeController::class, 'business'])->name('business');
Route::get('/business-epc', [HomeController::class, 'business_epc'])->name('business_epc');
Route::get('/business-product', [HomeController::class, 'business_product'])->name('business_product'); 
Route::get('/business-services', [HomeController::class, 'business_services'])->name('business_services'); 
Route::get('/business-trading', [HomeController::class, 'business_trading'])->name('business_trading'); 

Route::get('/investorInfo', [HomeController::class, 'investorInfo'])->name('investorInfo');
Route::get('/shareholders', [HomeController::class, 'shareholders'])->name('shareholders');