@extends('layout')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    img {
        background-color: black;
    }

    .image:hover {
        opacity: 0.3;
    }
</style>
@endsection
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Portofolio</h1>
            <a href="" class="h5 text-white">Portofolio</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Projek</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Daftar Pengalaman Perusahaan</h5>
            <h1 class="mb-0">PT KIAN SANTANG MULIATAMA</h1>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Konverter-Kit/IMG-20200831-WA0009-removebg-preview.png')}}" class="w-100" data-target="#exampleModal" data-toggle="modal" />

                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Konverter Kit Ergas ECK-300</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselKonverter" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselKonverter" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselKonverter" data-slide-to="1"></li>
                                                <li data-target="#carouselKonverter" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Konverter-Kit/IMG-20200831-WA0009-removebg-preview.png')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Konverter-Kit/1be367a4-6755-4f53-b7f8-3acacb515eaa.jpg')}}" style="height: fit-content; background-size: cover;" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Konverter-Kit/OIP (4).jpeg')}}" style="height: fit-content; background-size: cover;" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselKonverter" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselKonverter" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>Konverter Kit Ergas ECK-300</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Cianjur, Deli, Serdang, Bireun, Indramayu, Aceh, Asahan</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>PT. Yuan Sejati</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Master-Meter/master-meter.png')}}" class="w-100" data-toggle="modal" data-target="#exampleModal1" />
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Master Meter dan Meter Sales and Operation Region I</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselKonverter" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselKonverter" data-slide-to="0" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Master-Meter/master-meter.png')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselKonverter" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselKonverter" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>Master Meter dan Meter Sales and Operation Region I</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Medan, Pekanbaru, Palembang, Lampung, Batam</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>PT. Perusahaan Gas Negara</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/MRS G100/_MG_4567.JPG')}}" class="w-100" data-toggle="modal" data-target="#exampleModal2" />

                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">MRS G100</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselMRS" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselMRS" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselMRS" data-slide-to="1"></li>
                                                <li data-target="#carouselMRS" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/MRS G100/_MG_4567.JPG')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/MRS G100/_MG_4578.JPG')}}" style="height: fit-content; background-size: cover;" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/MRS G100/_MG_4601.JPG')}}" style="height: fit-content; background-size: cover;" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselMRS" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselMRS" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>MRS G100</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Kerawang Timur</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>PT. Surya Energi Parahita</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-4 mt-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)/20011410530815795.jpg')}}" class="w-100" data-toggle="modal" data-target="#exampleModal3" />

                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselSuku" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselSuku" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselSuku" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)/20011410530815795.jpg')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)/19010410330864830.jpg')}}" style="height: fit-content; background-size: cover;" alt="Second slide">
                                                </div>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselSuku" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselSuku" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Jakarta Timur</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>PT. Perusahaan Gas Negara</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 mt-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Pengadaan EVC dan Alat Ukur Sales and Operation Regional I Tahun 2022/elcorplus-500x500.png')}}" class="w-100" data-toggle="modal" data-target="#exampleModal4" />
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Pengadaan EVC dan Alat Ukur Sales and Operation Regional I</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselEVC" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselEVC" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselEVC" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Pengadaan EVC dan Alat Ukur Sales and Operation Regional I Tahun 2022/elcorplus-500x500.png')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Pengadaan EVC dan Alat Ukur Sales and Operation Regional I Tahun 2022/p8a6713red.png')}}" style="height: fit-content; background-size: cover;" alt="Second slide">
                                                </div>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselEVC" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselEVC" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>Pengadaan EVC dan Alat Ukur Sales and Operation Regional I</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Medan, Pekanbaru, Palembang, Lampung, Batam</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>PT. Perusahaan Gas Negara</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Provision of Development of Custody Meter Gas Turbin Jargas/_MG_4620.JPG')}}" class="w-100" data-toggle="modal" data-target="#exampleModal5" />
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Provision of Development of Custody Meter Gas Turbin Jargas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-6">


                                        <div id="carouselProvision" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselProvision" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselProvision" data-slide-to="1"></li>
                                                <li data-target="#carouselProvision" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Provision of Development of Custody Meter Gas Turbin Jargas/_MG_4620.JPG')}}" style="height: fit-content; background-size: cover;" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Provision of Development of Custody Meter Gas Turbin Jargas/_MG_4622.JPG')}}" style="height: fit-content; background-size: cover;" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('image-projek/Provision of Development of Custody Meter Gas Turbin Jargas/_MG_4629.JPG')}}" style="height: fit-content; background-size: cover;" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselProvision" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselProvision" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <table style="border: none;">
                                            <tr>
                                                <td>Nama Proyek</td>
                                                <td>:</td>
                                                <td>Provision of Development of Custody Meter Gas Turbin Jargas</td>

                                            </tr>
                                            <tr>
                                                <td>Bidang Pekerjaan</td>
                                                <td>:</td>
                                                <td>Pengadaan Barang</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td>:</td>
                                                <td>Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td>Pengguna Jasa</td>
                                                <td>:</td>
                                                <td>Energy Equity Epic (Sengkang) Pty.Ltd</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>:</td>
                                                <td>2022</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section>
        <!-- Modal gallery -->
        <!-- tabel -->
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Paket Pekerjaan</th>
                    <th>Bidang Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Pengguna Jasa</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengadaan EVC dan Alat Ukur Sales and Operation Regional I</td>
                    <td>Pengadaan Barang</td>
                    <td>Medan, Pekanbaru, Palembang, Lampung, Batam</td>
                    <td>PT. Perusahaan Gas Negara</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>2</td>
                    <td>MRS G100</td>
                    <td>Pengadaan Barang</td>
                    <td>Kerawang Timur</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Master Meter dan Meter Sales and Operation Region I </td>
                    <td>Pengadaan Barang</td>
                    <td>Medan, Pekanbaru, Palembang, Lampung, Batam</td>
                    <td>PT. Perusahaan Gas Negara</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>4</td>
                    <td>Konverter Kit Ergas ECK-300</td>
                    <td>Pengadaan Barang</td>
                    <td>Cianjur, Deli, Serdang, Bireun, Indramayu, Aceh, Asahan</td>
                    <td>PT. Yuan Sejati</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Konverter Kit Ergas ECK-300</td>
                    <td>Pengadaan Barang</td>
                    <td>Brebes, Rokan Hulu, Rokan Hilir, Tasik Malaya</td>
                    <td>PT. Yuan Sejati</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>6</td>
                    <td>Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta Timur</td>
                    <td>PT. Perusahaan Gas Negara</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Provision of Development of Custody Meter Gas Turbin Jargas</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta</td>
                    <td>Energy Equity Epic (Sengkang) Pty.Ltd</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>8</td>
                    <td>Perbaikan Motor Beserta Blow Thruster</td>
                    <td>Pengadaan Jasa</td>
                    <td>Jakarta Timur</td>
                    <td>Mabes TNI AL</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pengadaan Regulator Rumah Tangga (Ergas) sejumlah 4.020pcs</td>
                    <td>Pengadaan Barang</td>
                    <td>Kab.Lumajang</td>
                    <td>KSO PT.Petronesia Benimel - PT.Maharani Prima</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>10</td>
                    <td>Pengadaan Material Regulator Tahap 1 sejumlah 50.000 pcs</td>
                    <td>Pengadaan Jasa</td>
                    <td>Jakarta Barat</td>
                    <td>PT. PGAS Solution</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Pengadaan Material Regulator (SPK 3 AMD 4) sejumlah 12.073pcs</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta Barat</td>
                    <td>PT. PGAS Solution</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>12</td>
                    <td>Pengadaan Material Regulator(SPK 1 AMD 4, SPK 3 AMD 3) sejumlah 9.030 pcs</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta Barat</td>
                    <td>PT. PGAS Solution</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Pengadaan Metering Regulating Station (MRS) & Metering Station (MS)</td>
                    <td>Pengadaan Barang</td>
                    <td>Surabaya</td>
                    <td>PT. PGAS Solution</td>
                    <td>2021</td>
                </tr>
                <tr class="active-row">
                    <td>14</td>
                    <td>Pengadaan Turbine Meter dan Modifikasi MRS</td>
                    <td>Pengadaan dan Modifiksi</td>
                    <td>Wajo dan Banggai</td>
                    <td>PT. PGAS Solution</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Pengadaan MRS G.65</td>
                    <td>Pengadaan Barang</td>
                    <td>Karawang</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>2021</td>
                </tr>
                <tr class="active-row">
                    <td>16</td>
                    <td>Pengadaan MRS, RSI & RS Proyek Pembangunan Jaringan Gas Bumi Rumah Tangga </td>
                    <td>Pengadaan Barang</td>
                    <td>Kab. Aceh Utara Kota & Kab. Aceh Timur</td>
                    <td>PT. Adhi Karya (Persero) Tbk</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Pekerjaan Upgrading Gas Metering Konsumen PT. Fajar Surya Wisesa </td>
                    <td>EPC</td>
                    <td>Tegal Gede</td>
                    <td>PT. Nuansa Indah Mane </td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>18</td>
                    <td>Pengadaan 22 Unit Stasiun Pengukur Pengalur (MRS) dan Pengkoreksi Volume Elektronik (EVC)</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta</td>
                    <td>PT. PGAS Solution</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Pengadaan PRS, RSI, ESDV & RS</td>
                    <td>Pengadaan Barang</td>
                    <td>Kota Langsa, Kab. Aceh Tamian dan Kab. Deli Serdang</td>
                    <td>PT. Adhi Karya (Persero) Tbk</td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>20</td>
                    <td>Pembangunan Jargas Rumah Tangga </td>
                    <td>EPC</td>
                    <td>Kutai Kartanegara dan Kota Samarinda </td>
                    <td>DIrektorat Jenderal Minyak dan Gas Bumi </td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Gas Receiving Station Cikarang Listrindo </td>
                    <td>EPC</td>
                    <td>Cikarang</td>
                    <td>PT. Pratiwi Putri Sulung</td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>22</td>
                    <td>MRS Rotary Meter G.40 </td>
                    <td>Pengadaan Barang</td>
                    <td>Pengadaan Barang</td>
                    <td>PT. Eka Pratama Cemerlang</td>
                    <td>2019</td>
                </tr>
                <!-- and so on... -->
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
@endsection