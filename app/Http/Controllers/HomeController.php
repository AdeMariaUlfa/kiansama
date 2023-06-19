<?php

namespace App\Http\Controllers;

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
   public function susunanPengurus()
   {
    return view('susunanPengurus');
   }
   public function portofolioProjek()
   {
    return view('portofolio-projek');
   }
   public function strukturPerusahaan()
   {
    return view('strukturPerusahaan');
   }
   public function kontakKami()
   {
    return view('kontakKami');
   }


   // view page bahasa inggris
   public function home()
   {
    return view('eng.home');
   }
}
