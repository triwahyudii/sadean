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
        </div>
    </div>
</section>

<!-- DISPLAY PRODUCT -->
<section class="pt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('/img/beranda/tukang.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Bangun Rumah</h5>
                        <p class="card-text">Bangun rumah impian dengan anggaran yang rendah.</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/rumah')}}" class="btn btn-warning">Lihat Project</a>
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
                    <img src="{{asset('/img/beranda/desain.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Desain Rumah</h5>
                        <p class="card-text">Rancang rumah dengan teliti sesuai keinginan.</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/desain')}}" class="btn btn-warning">Lihat Project</a>
                            </div>
                            <div class="col">
                                <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20desain%20rumah" class="btn btn-primary">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('/img/beranda/deal.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Wedding Organizer</h5>
                        <p class="card-text">Lengkapi kebutuhan acara dengan peralatan yang lengkap.</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/wedding')}}" class="btn btn-warning">Lihat Project</a>
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
                    <img src="{{asset('/img/beranda/gorden.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Gorden</h5>
                        <p class="card-text">Buat terkesan tamu dengan gorden yang mewah dan elegan.</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/gorden')}}" class="btn btn-warning">Lihat Produk</a>
                            </div>
                            <div class="col">
                                <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20pesan%20gorden" class="btn btn-primary">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('/img/beranda/chopper.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Mesin Chopper</h5>
                        <p class="card-text">Hemat waktu dan hemat tenaga dengan mesin pemotong.</p>
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/chopper')}}" class="btn btn-warning">Lihat Produk</a>
                            </div>
                            <div class="col">
                                <a href="https://wa.me/6285732003433?text=Halo,%20Saya%20ingin%20pesan%20mesin%20pemotong" class="btn btn-primary">Hubungi Kami</a>
                            </div>
                        </div>
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

<section>
    <div class="container">
        <div class="text-center">
            <div class="row justify-content-center pt-3">
                <div class="card m-2 border-1" style="width: 20rem;">
                    <img src="{{asset('/img/beranda/cs.png')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay pt-5">
                        <button type="button" class="btn btn-primary mt-5 rounded-5">Konsultasikan</button>
                    </div>
                </div>
                <div class="card m-2 border-0" style="width: 20rem;">
                    <img src="{{asset('/img/beranda/plan.png')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay pt-5">
                        <button type="button" class="btn btn-primary mt-5 rounded-5">Rencanakan</button>
                    </div>
                </div>
                <div class="card m-2 border-0" style="width: 20rem;">
                    <img src="{{asset('/img/beranda/worker.png')}}" class="card-img-top" alt="...">
                    <div class="card-img-overlay pt-5">
                        <button type="button" class="btn btn-primary mt-5 rounded-5">Kami Bangunkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5 pb-5">
        <h1 class="text-center mb-0">Mereka Percaya Kepada Kami</h1>
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade text-center" data-bs-ride="carousel" data-bs-pause="hover">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/img/testi/1.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/2.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/3.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/4.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/5.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/6.png')}}" class="d-block" width="300" height="300" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/testi/7.png')}}" class="d-block" width="300" height="300" alt="...">
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