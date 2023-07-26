@extends('layout')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    .galery {
        background-color: black;
    } 

    .image:hover {
        opacity: 0.3;
    }

    .carousel-caption {
        top: auto;
        bottom: 20px;
        left: 20px;
        right: auto;

    }

    .box {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 20px;
        padding-left: 10px;
        padding-right: 100px;

    }

    .box::before {
        content: "";
        background-color: black;
        background-size: cover;
        position: absolute;
        border-radius: 8px;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        opacity: 0.75;

    }

    .text-box {
        position: relative;
        color: #ffffff;
    }

    @media (min-width: 768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto;
        }

    }

    @media (min-width: 768px) {
        .modal-xl {
            width: 80%;
            max-width: 1200px;
        }
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
    <div class="container py-4">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Daftar Pengalaman Perusahaan</h5>
            <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
        </div>
        <!-- Modal gallery -->
        <div class="row justify-content-center">
            @foreach($data as $p)
            <div class="col-lg-3 col-md-6 mb-5 mx-4 ">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="{{asset('file-dokumentasi/'.$p->dokumentasi->first()->dokumentasi)}}" data-target="#modal{{$p->id}}" data-toggle="modal" style="object-fit: cover; border: 5px solid black; border-radius: 30px; width: 300px; height: 300px;" />
                </div>
            </div>
            @endforeach

        </div>



    </div>
</div>
<!-- Modal gallery -->
@foreach($data as $p)

<div class="modal fade bd-example-modal-xl" id="modal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body">
                <div id="carousel{{$p->id}}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($p->dokumentasi as $key => $val)
                        <li data-target="#carousel{{$p->id}}" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active':''}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">


                        @foreach($p->dokumentasi as $key => $val)
                        <div class="carousel-item {{$key == 0 ? 'active':''}}">
                            <img class="d-block w-100 galery" src="{{asset('file-dokumentasi/'.$val->dokumentasi)}}" style="object-fit:cover ;height: 600px ;" alt="First slide">
                        </div>
                        @endforeach
                        <div class="carousel-caption text-left">
                            <div class="box">
                                <div class="text-box">
                                    <h5>{{$p->nama_paket_pekerjaan}}</h5>
                                    <p>
                                        Bidang Pekerjaan : {{$p->bidang_pekerjaan}}
                                        <br>
                                        Lokasi : {{$p->lokasi}}
                                        <br>
                                        Pengguna Jasa : {{$p->pengguna_jasa}}
                                        <br>
                                        Tahun : {{$p->tahun}}
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel{{$p->id}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel{{$p->id}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- <div class="col-12 mt-3">
                    <table style="border: none;">
                        <tr>
                            <td>Nama Proyek</td>
                            <td>:</td>
                            <td></td>

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
                </div> -->

            </div>
        </div>
    </div>
</div>
@endforeach
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