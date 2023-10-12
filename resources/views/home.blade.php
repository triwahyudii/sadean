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

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Social media -->
            <!-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
  </section> -->
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="pt-1">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3 text-secondary"></i>Sadean
                            </h6>
                            <p>
                                Kami berpengalaman lebih dari 8 tahun. <br /> Sadean adalah para ahli dalam bidangnya, pembanguna rumah, penyedia alat pesta dan alat pernikahan, pemasangan gorden dan dengan transparansi dalam anggaran akan memudahkan proses pengerjaan.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Jasa Kami
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Jasa Bangun Rumah</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Sewa Alat Pesta</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Gorden</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Kontak Kami</h6>
                            <p><i class="fas fa-home me-3 text-secondary"></i> Ponggok, Blitar, Jawa Timur</p>
                            <p>
                                <i class="fas fa-envelope me-3 text-secondary"></i>
                                trideveloper99@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3 text-secondary"></i> +6285732003433</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2023 Copyright
                <a class="text-reset fw-bold" href="#">sadean.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

    <!-- Floating Buttons Whatsapp -->
    <div id="whatsapp">
        <a href="#" target="_blank" id="toggle1" class="wtsapp">
            <i class="fa fa-whatsapp"></i>
        </a>
    </div>

    <script src="https://kit.fontawesome.com/39d2ff4747.js" crossorigin="anonymous"></script>
</body>

</html>

<style type="text/css">
    #whatsapp .wtsapp:focus {
        border: none;
        outline: none;
    }

    #whatsapp .wtsapp {
        position: fixed;
        transition: all .5s ease;
        background: #25d366;
        display: block;
        text-align: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-radius: 50px;
        border-right: none;
        color: #fff;
        font-weight: 700;
        font-size: 18px;
        bottom: 130px;
        right: 20px;
        border: 0;
        z-index: 99;
        width: 50px;
        height: 50px;
        line-height: 48px;
    }

    #whatsapp .wtsapp:before {
        content: "";
        position: absolute;
        z-index: -1;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        display: block;
        width: 60px;
        height: 60px;
        background: #25d366;
        border-radius: 50%;
        -webkit-animation: pulse-border 1500ms ease-out infinite;
        animation: pulse-border 1500ms ease-out infinite;
    }

    @keyframes pulse-border {

        0% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            opacity: 1;
        }

        100% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            opacity: 0;
        }

    }
</style>