<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function profilKami()
   {
      return view('profilKami');
   }
   public function bisnisKami()
   {
      return view('bisnisKami');
   }
   public function bisnisKami_epc()
   {
      return view('bisnisKami-epc');
   }
   public function susunanPengurus()
   {
      return view('susunanPengurus');
   }
   public function portofolioProjek()
   {
    return view('portofolio-projek');
   }
   public function infoInvestor()
   {
    return view('investor-info');
   }
   public function strukturPerusahaan()
   {
      return view('strukturPerusahaan');
   }
   public function kontakKami()
   {
      return view('kontakKami');
   }
   public function berita()
   {
      $data = berita::latest()->get();
      return view('guest-berita', compact('data'));
   }


   // view page bahasa inggris
   public function home()
   {
      return view('eng.home');
   }
}
