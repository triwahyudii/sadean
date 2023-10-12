<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sadean</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid mt-3 mb-2">
                <a class="navbar-brand fw-bold" href="#">Sadean</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GRIYA SEHAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">EVENT ORGANIZER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GORDEN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="pt-5">
            <div class="container">
                <div class="text-center">
                    <h1>Multiverse building,</h1>
                    <h4 class="fw-bold" style="color: #F99417;">Memberikan Layanan Solusi</h4>
                    <h5>Sejak Tahun 2019</h5>
                    <div class="d-grid gap-2 col-6 mx-auto pt-3">
                        <a href="#" class="btn btn-warning btn-lg fw-bold">Hubungi Kami</a>
                    </div>
                    <div class="row justify-content-center pt-3">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/55.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5">Konsultasikan</button>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/11.png')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5">Rencanakan</button>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{asset('/img/22.png')}}" class="card-img-top" alt="...">
                            <div class="card-img-overlay pt-5">
                                <button type="button" class="btn btn-warning mt-5">Kami Bangunkan</button>
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
                                        <a href="" class="btn btn-primary">Hubungi Kami</a>
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
                                        <a href="" class="btn btn-primary">Hubungi Kami</a>
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
                                        <a href="" class="btn btn-primary">Hubungi Kami</a>
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

      
    </div>

    <script src="https://kit.fontawesome.com/39d2ff4747.js" crossorigin="anonymous"></script>
</body>

</html>