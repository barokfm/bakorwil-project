@extends('layouts.main')

@section('main')
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Peminjaman</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <a href="/login" class="btn btn-primary px-4 mx-3" type="submit">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bakorwil.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bakorwil-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bakorwil-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/bakorwil-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container py-4">
        <h2>Sewa Gedung</h2>
    </div>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card shadow">
                        <img src="img/bakorwil-4.jpg " class="card-img-top" alt="img/bakorwil.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Aula Bakorwil</h5>
                            <p class="card-text">Berdasarkan Peraturan Daerah Provinsi Jawa Timur Nomor 12 Tahun 2008
                                tentang Organisasi dan Tata Kerja Badan Koordinasi Wilayah Pemerintahan dan Pembangunan
                                Jawa Timur dan Peraturan Gubernur Jawa Timur Nomor 117 Tahun 2008 Tentang Uraian Tugas
                                Sekretariat, Bidang, Sub Bagian dan Sub Bidang Badan Koordinasi Wilayah Pemerintahan dan
                                Pembangunan Jawa Timur maka kedudukan, tugas, fungsi, susunan organisasi dan tata kerja
                                Badan Koordinasi Wilayah Pemerintahan dan Pembangunan Pamekasan adalah sebagai berikut :
                            </p>
                        </div>
                    </div>
                    <section class="py-2">
                        <a class="btn btn-info" href="/rincian">
                            RINCIAN
                        </a>
                        <a href="/formulir" class="btn btn-primary px-4">SEWA</a>
                    </section>
                </div>
            </div>
    </section>
@endsection
