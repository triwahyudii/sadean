@extends('layouts.home')

@section('content')
<section class="pt-5">
            <div class="container">
                <div class="text-center">
                    <h1>Multiverse building,</h1>
                    <h4 class="fw-bold" style="color: #F99417;">Memberikan Layanan Solusi</h4>
                    <h5>Sejak Tahun 2019</h5>
                    <div class="d-grid gap-2 col-6 mx-auto pt-3">
                        <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20konsultasi" class="btn btn-warning btn-lg fw-bold">Hubungi Kami</a>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/55.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5 rounded-5">Konsultasikan</button>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/11.png')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5 rounded-5">Rencanakan</button>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/22.png')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5 rounded-5">Kami Bangunkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container text-center pt-4">
                <div class="row align-items-center">
                    <div class="col">
                        <h1>Gratis Konsultasi</h1>
                        <i class="fa-solid fa-phone-volume text-primary fs-1 pb-2"></i>
                        <p>Konsultasikan kebutuhan kamu untuk menyesuaikan anggaran yang kamu perlukan.</p>
                    </div>
                    <div class="col">
                        <h1>Gratis Perencanaan</h1>
                        <i class="fa-solid fa-file-circle-check text-primary fs-1 pb-2"></i>
                        <p>Buat rencana dengan para ahli agar sesuai dengan yang kamu inginkan terealisasi.</p>
                    </div>
                    <div class="col">
                        <h1>Exclusive & Experience</h1>
                        <i class="fa-solid fa-person-circle-check text-primary fs-1 pb-2"></i>
                        <p>Tim para ahli berkompeten sesuai bidangnya dengan pengalaman lebih dari 8 tahun.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('/img/w1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Desain Rumah</h5>
                                <p class="card-text">Bangun rumah impian dengan anggaran yang rendah.</p>
                                <div class="row">
                                    <div class="col">
                                        <a href="" class="btn btn-warning">Lihat Project</a>
                                    </div>
                                    <div class="col">
                                        <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20membangun%20rumah" class="btn btn-primary">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('/img/w2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Sewa Alat Pesta</h5>
                                <p class="card-text">Lengkapi kebutuhan acara dengan peralatan yang lengkap.</p>
                                <div class="row">
                                    <div class="col">
                                        <a href="" class="btn btn-warning">Lihat Project</a>
                                    </div>
                                    <div class="col">
                                        <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20menyewa%20alat%20pesta" class="btn btn-primary">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('/img/w3.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Pasang Gorden</h5>
                                <p class="card-text">Buat terkesan tamu dengan gorden yang mewah dan elegan.</p>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{url('/gorden')}}" class="btn btn-warning">Lihat Project</a>
                                    </div>
                                    <div class="col">
                                        <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20pesan%20gorden" class="btn btn-primary">Hubungi Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pt-5 pb-5">
                <h1 class="text-center mb-0">Mereka Percaya Kepada Kami</h1>
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="hover">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/img/1.png')}}" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/img/2.png')}}" class="d-block w-100  " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/img/3.png')}}" class="d-block w-100  " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/img/11.png')}}" class="d-block w-100  " alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
@endsection