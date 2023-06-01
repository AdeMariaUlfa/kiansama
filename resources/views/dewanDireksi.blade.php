@extends('layout')
@section('content')
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Dewan Direksi</h1>
                    <a href="" class="h5 text-white">Tentang Kami</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Dewan Direksi</a>
                </div>
            </div>
        </div>
        
        <div class="ch-blog-content">
        <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="image-cont">
                                <img src="{{ asset('template/img/dewan1.jpg') }}" alt="" style="width:172px; height:258px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0"><br>
                                    <h2 class="card-title mb-1">Sutano</h2>
                                    <h5 class="sub-title">Direktur Utama</h5>
                                    <p class="card-text">
                                    Alamat	: Komplek BPPB Blok H-30 RT/RW. 002/007 Pasir Mulya, Kec.Kota Bogor Barat<br>
                                    No. Hp	: +62 812-5417-6320
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="image-cont">
                                <img src="{{ asset('template/img/dewan2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0"><br>
                                    <h2 class="card-title mb-1">Fadjar Tri Ananda</h2>
                                    <h5 class="sub-title">Direktur</h5>
                                    <p class="card-text">
                                    Alamat	: Alamat	: Jl. Taman Bahari II Komp. Hankam RT/RW. 010/002 Pasir Gunung Selatan, Kec, Cimanggis<br>
                                    No. Hp	: +62 812-8613-856
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
@endsection