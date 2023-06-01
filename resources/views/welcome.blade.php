@extends('layout')
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('template/img/home1.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT KIAN SANTANG MULIATAMA</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Solusi Digital<br> Kreatif & Inovatif</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('template/img/home2.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-3 animated slideInDown">PT KIAN SANTANG MULIATAMA</h4>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Solusi Digital<br> Kreatif & Inovatif</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-hands-helping text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="text-white mb-0">PERDAGANGAN</h5>
                            <!-- <h1 class="text-white mb-0">12345</h1> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-cog text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="text-primary mb-0">PELAYANAN</h5>
                            <!-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fas fa-hard-hat text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h5 class="text-white mb-0">KONSTRUKSI</h5>
                            <!-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">PT KIAN SANTANG MULIATAMA</h1>
                    </div>
                    <p class="mb-4">Memberikan solusi terbaik bagi mitra bisnis kami berdasarkan kompetensi, profesionalisme, kepercayaan, dan motivasi untuk memenuhi tuntutan mitra bisnis dan selalu mengutamakan hubungan jangka panjang dengan mitra bisnis dan pengguna akhir di seluruh Indonesia.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Perdagangan</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Konstruksi</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Industri</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Jasa</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Transportasi</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Panggilan untuk mengajukan pertanyaan apapun</h5>
                            <h4 class="text-primary mb-0">(021) 82748249</h4>
                        </div>
                    </div>
                    <a href="/profil" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Baca Lebih Lanjut</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('template/img/tentang.jpg') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection