@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Bisnis</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Bisnis - EPC</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">KEMAMPUAN KSM DI BIDANG EPC</h2>
        </div>
        <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="http://127.0.0.1:8000/image-projek/Konverter-Kit/IMG-20200831-WA0009-removebg-preview.png" class="w-100" data-target="#exampleModal" data-toggle="modal">
                            <h5>DESIGN & ENGINEERING</h5>
                            <figcaption>KSM memiliki SDM dengan latar belakang teknik (engineering) dengan keahlian: Electrical (Electronic, Instument, Telecommunication & Programming), Mechanical (Construction & Pipeline) and teknik sipil.</figcaption>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="http://127.0.0.1:8000/image-projek/Master-Meter/master-meter.png" class="w-100" data-toggle="modal" data-target="#exampleModal1"> 
                            <h5>INFRASTRUCTURE WORKS</h5>
                            <figcaption>Pipe Support, Utilities Foundation, Building, Yard, dan lain-lain.</figcaption>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="http://127.0.0.1:8000/image-projek/MRS G100/_MG_4567.JPG" class="w-100" data-toggle="modal" data-target="#exampleModal2">
                            <h5>FABRICATION WORKS</h5>
                            <figcaption>Pressure Vessel, Skid, Pipe Spool, Control Panel, Wiring Installation, DCS Programming, dan lain-lain.</figcaption>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="http://127.0.0.1:8000/image-projek/Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)/20011410530815795.jpg" class="w-100" data-toggle="modal" data-target="#exampleModal3">
                            <h5>INSTALLATION AT SITE</h5>
                            <figcaption>- Mechanical Erection<br>
                                        - Pipeline Connection<br>
                                        - Rotating Equipment <br>
                                        - Electrical<br>
                                        - Instrumentation<br>
                                        - Central Control Room
                            </figcaption>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="http://127.0.0.1:8000/image-projek/Pengadaan EVC dan Alat Ukur Sales and Operation Regional I Tahun 2022/elcorplus-500x500.png" class="w-100" data-toggle="modal" data-target="#exampleModal4">
                            <h5>TESTING & COMMISSIONING</h5>
                            <figcaption>FAT, SAT, Testing – Commissioning & Running, Warranty, dan lain-lain.</figcaption>
                        </div>
                    </div>
                   
                </div>
            </section>
    </div>
</div>
@endsection