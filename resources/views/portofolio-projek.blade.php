@extends('layout')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    /* img {
        background-color: black;
    } */

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
            <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="{{asset('image-projek/Konverter-Kit/Konverter Kit Ergas ECK-300.png')}}" class="w-100" data-target="#exampleModal" data-toggle="modal" />
                            <h5 class="text-center">Konverter Kit</h5>
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
                            <h5 class="text-center">Master-Meter</h5>
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
                            <h5 class="text-center">MRS G100</h5>
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
                            <h5 class="text-center">Pekerjaan Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)</h5>
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
                            <h5 class="text-center">Pengadaan EVC dan Alat Ukur Sales and Operation Regional I Tahun 2022</h5>
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
                            <h5 class="text-center">Provision of Development of Custody Meter Gas Turbin Jargas</h5>
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
        </section><br><br>
        <!-- Modal gallery -->
        <!-- tabel -->
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Paket Pekerjaan</th>
                    <th>Bidang Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Pemberi Tugas</th>
                    <th>Pengguna Jasa</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td>1</td>
                    <td>Pekerjaan Pengadaan dan Instalasi Senior Orifice Fitting Meter Pupuk Kujang 1A & 1B District Cilamaya</td>
                    <td>EPC</td>
                    <td>Cilamaya</td>
                    <td>PT. Patra Drilling Contractor</td>
                    <td>PT. Pertamina Gas</td>
                    <td>2023</td>
                </tr>
                <tr class="active-row">
                    <td>2</td>
                    <td>Pekerjaan Metering Replacement for Jabung Station </td>
                    <td>EPC</td>
                    <td>Jabung </td>
                    <td>PT. Transportasi Gas Indonesia</td>
                    <td>PT. Transportasi Gas Indonesia</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pengadaan dan Pengembangan Workshop Kalibrasi Meter Diaphragma, Pressure Gauge dan Temperature Gauge </td>
                    <td>EPC</td>
                    <td>Palembang</td>
                    <td>PT. PGAS Solution</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2023</td>
                </tr>
                <tr class="active-row">
                    <td>4</td>
                    <td>Pengadaan Unit OMNI Flow Computer di Duri dan PLN Duri Metering Station </td>
                    <td>Pengadaan Barang</td>
                    <td>Duri</td>
                    <td>PT. Transportasi Gas Indonesia</td>
                    <td>PT. Transportasi Gas Indonesia</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pengadaan Metering Regulating Station (MRS) G.65 dan G.250 </td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>2023</td>
                </tr>
                <tr class="active-row">
                    <td>6</td>
                    <td>Pengadaan Ultrasonic Gas Flow Meter 16” Ansi 150</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta </td>
                    <td>PT. Ansi Mega Instrumenindo</td>
                    <td>PT. PLN</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Pengadaan Konverter Kit Ergas ECK-300 </td>
                    <td>Pengadaan Barang</td>
                    <td>Indonesia</td>
                    <td>PT. Yuan Sejati</td>
                    <td>PT. Pertamina</td>
                    <td>2023</td>
                </tr>
                <tr class="active-row">
                    <td>8</td>
                    <td>Pengadaan Master Meter dan Meter Sales and Operation Region I</td>
                    <td>Pengadaan Barang</td>
                    <td>Medan, Batam, Pekanbaru dan Lampung</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pengadaan Suku Cadang Regulator Kit RMG dan Bryan Donkin (Honeywell)</td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>10</td>
                    <td>Pengadaan Metering Regulating System (MRS) G100 </td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>PT. Surya Energi Parahita</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Pengadaan EVC dan Alat Ukur Sales and Operation Regional I</td>
                    <td>Pengadaan Barang</td>
                    <td>Medan, Pekanbaru, Palembang, Lampung, Batam</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>12</td>
                    <td>Pengadaan Material Regulator 50.000 pcs </td>
                    <td>Pengadaan Barang</td>
                    <td>Jabodetabek </td>
                    <td>PT. PGAS Solution</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Provision of Development if Custody Meter Gas Turbine Jargas  </td>
                    <td>Pengadaan dan Instalasi </td>
                    <td>Sengkang </td>
                    <td>Energy Equity Epic (Sengkang) Pty. Ltd</td>
                    <td>Energy Equity Epic (Sengkang) Pty. Ltd</td>
                    <td>2022</td>
                </tr>
                <tr class="active-row">
                    <td>14</td>
                    <td>Kontrak Pengadaan Jasa Lainnya Pemeliharaan Tingkat Depo  Platform KRI DKB-932</td>
                    <td>Jasa Lainnya </td>
                    <td>Jakarta </td>
                    <td>Markas Besar Angkatan Laut Dinas Materiel</td>
                    <td>Markas Besar Angkatan Laut Dinas Materiel</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Pekerjaan Penambahan Titik Pantau GMC GDMR 1 </td>
                    <td>Pengadaan dan Instalasi</td>
                    <td>Jakarta</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2021</td>
                </tr>
                <tr class="active-row">
                    <td>16</td>
                    <td>Pengadaan Jasa Engineering Procurement Construction By Pass Line CNG Plant Tambak Lorok PLTU</td>
                    <td>EPC</td>
                    <td>Semarang</td>
                    <td>PT. National Energy Solutions</td>
                    <td>PT. Perta Daya Gas</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Pengadaan Material Regulator Rumah Tangga Proyek Pembangunan Jaringan Gas </td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta & Tangerang</td>
                    <td>PT. PGAS Solution</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2021</td>
                </tr>
                <tr class="active-row">
                    <td>18</td>
                    <td>Pengadaan Regulating Station, Regulator, Turbine dan Modifikasi M/RS Proyek Pembangunan Jaringan Gas Bumi </td>
                    <td>Pengadan dan Instalasi </td>
                    <td>Surabaya dan Siodarjo</td>
                    <td>PT. PGAS Solution</td>
                    <td>Direktorat Jenderal Minyak dan Gas Bumi, Kementerian Energi dan Sumber Daya Mineral</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Pengadaan Material Transition Fitting, Metering Regulating System (MRS) & Metering System (MS) dan Regulator </td>
                    <td>Pengadaan Barang</td>
                    <td>Surabaya dan Kab. Sidoarjo  </td>
                    <td>PT. PGAS Solution</td>
                    <td>Direktorat Jenderal Minyak dan Gas Bumi, Kementerian Energi dan Sumber Daya Mineral</td>
                    <td>2021</td>
                </tr>
                <tr class="active-row">
                    <td>20</td>
                    <td>Legalisasi dan Kalibrasi Master Meter Rotary G.65, Turbine G.400 & G.4000 Batam </td>
                    <td>Jasa Lainnya </td>
                    <td>Batam</td>
                    <td>PT. PGAS Solution</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Pengadaan Barang TRZ03-K DN 250 10INCH qty 4 Unit </td>
                    <td>Pengadaan Barang</td>
                    <td>Belawan</td>
                    <td>PT. Gearindo Tiga Utama</td>
                    <td>PT. PJB Belawan</td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>22</td>
                    <td>Pengadaan 22 Unit Stassiun Pengukur Penyalur (MRS) dan Pengkoreksi Volume Elektronik (EVC) </td>
                    <td>Pengadaan Barang</td>
                    <td>Jakarta Barat</td>
                    <td>PT. PGAS Solution</td>
                    <td>PT. Perusahaan Gas Negara Tbk</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Upgrading Gas Metering Konsumen PT. Fajar Wisesa di SKG Tegal Gede Asset 3 Oil & Gas Transportation </td>
                    <td>EPC</td>
                    <td>Tegal Gede</td>
                    <td>PT. Nuansa Indah Mane</td>
                    <td>PT. Pertamina EP</td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>24</td>
                    <td>Pengadan PRS, RSI, ESDV & RS Proyek Pembangunan Jargas Rumah Tangga </td>
                    <td>Pengadaan barang</td>
                    <td>Kota Langsa, Kabupaten Aceh Tamian dan Kabupaten Deli Serdang</td>
                    <td>PT. Adhi Karya (Persero) Tbk</td>
                    <td>Direktorat Jenderal Minyak dan Gas Bumi, Kementerian Energi dan Sumber Daya Mineral</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Pembangunan Jargas Rumah Tangga  (9.003SR)</td>
                    <td>EPC</td>
                    <td>Kabupaten Kutai Kartenegara dan Kota Samarinda</td>
                    <td>Direktorat Jendral Minyak dan Gas Bumi</td>
                    <td>Direktorat Jendral Minyak dan Gas Bumi</td>
                    <td>2020</td>
                </tr>
                <tr class="active-row">
                    <td>26</td>
                    <td>Stasiun Penerimaan Gas  </td>
                    <td>EPC</td>
                    <td>Cikarang</td>
                    <td>PT. Pratiwi Putri Sulung</td>
                    <td>PT. Cikarang Listrindo Tbk</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Pengadaan MRS Rotary Meter G.40  </td>
                    <td>Pengadaan Barang</td>
                    <td>Bekasi </td>
                    <td>PT. Eka Pratama CemerlangMane </td>
                    <td>PT. Bayu Buana Gemilang </td>
                    <td>2019</td>
                </tr>
                <tr class="active-row">
                    <td>28</td>
                    <td>Jasa Pengukuran, Pengoperasian dan Pemeliharaan Fasilitas Custody Flow Meter di PK-52 Kaltimra</td>
                    <td>EPC</td>
                    <td>Tanjung Batu </td>
                    <td>PT. National Energy Solutions</td>
                    <td>PT. PLN</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Rectification Metering </td>
                    <td>EPC</td>
                    <td>Jawa Timur</td>
                    <td>PT. Pratiwi Putri Sulung</td>
                    <td>Ophir Indonesia (Sampang) Pty Ltd</td>
                    <td>2019</td>
                </tr>
                <tr class="active-row">
                    <td>30</td>
                    <td>Pekerjaan Pengadaan Gas Metering Package Pembangunan Fasilitas Produksi Lapangan Bambu Besar </td>
                    <td>EPC</td>
                    <td>Karawang </td>
                    <td>PT. Pratiwi Putri Sulung</td>
                    <td>PT. Pertamina EP</td>
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