@extends('layout')
@section('content')
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Dewan Komisaris</h1>
                    <a href="" class="h5 text-white">Tentang Kami</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Dewan Komisaris</a>
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
                                <img src="{{ asset('template/img/dewan4.jpg') }}" alt="" style="width:172px; height:258px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0"><br>
                                    <h2 class="card-title mb-1">Ir. Agus Salim</h2>
                                    <h5 class="sub-title">Komisaris Utama</h5>
                                    <p class="card-text">
                                    Alamat	: Jl. Elang Malindo X Blok C3 No.1 RT/RW. 009/008, Cipinang Melayu, Kec. Makassar<br>
                                    No. Hp	: +62 899-9114-888
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" >
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="image-cont">
                                <img src="{{ asset('template/img/dewan5.jpg') }}" alt="" style="width:172px; height:258px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0"><br>
                                    <h2 class="card-title mb-1">Richard Leonardus Adikarta</h2>
                                    <h5 class="sub-title">Komisaris Independen</h5>
                                    <p class="card-text">
                                    Alamat	: Jl. Kedoya Sel., Kebon Jeruk, Jakarta Barat, DKI Jakarta 11520<br>
                                    No. Hp	: -
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-6" >
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <div class="image-cont">
                                <img src="{{ asset('template/img/dewan6.jpg') }}" alt="" style="width:172px; height:258px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pt-0"><br>
                                    <h2 class="card-title mb-1">Taufik Dwicahyono</h2>
                                    <h5 class="sub-title">Komisaris</h5>
                                    <p class="card-text">
                                    Alamat	: Jl. Purwakarta No. 6 RT/RW. 008/005, Kel. Menteng Kec. Menteng<br>
                                    No. Hp	: +62 878-7853-5344
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
        </div>
        </div>
        </div>
@endsection