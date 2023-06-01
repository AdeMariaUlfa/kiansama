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
   public function dewanDireksi()
   {
    return view('dewanDireksi');
   }
   public function dewanKomisaris()
   {
    return view('dewanKomisaris');
   }
   public function strukturPerusahaan()
   {
    return view('strukturPerusahaan');
   }
}
