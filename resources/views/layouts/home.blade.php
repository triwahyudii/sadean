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
        <nav class="navbar navbar-expand-lg bg-warning bg-gradient bg-opacity-75">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('/img/logo/SADEAN.png') }}" alt="Sadean" width="70" height="70">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav fw-bold">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('rumah')}}">BANGUN RUMAH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('wedding')}}">WEDDING ORGANIZER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('gorden')}}">GORDEN</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GALLERY
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-center" href="{{ url('gallery/rumah') }}">Bangun Rumah</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="{{ url('gallery/wedding') }}">Wedding Organizer</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="{{ url('gallery/gorden') }}">Gorden</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

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
                                <a href="{{url('rumah')}}" class="text-reset text-decoration-none">Jasa Bangun Rumah</a>
                            </p>
                            <p>
                                <a href="{{url('wo')}}" class="text-reset text-decoration-none">Penyelenggara Pernikahan</a>
                            </p>
                            <p>
                                <a href="{{url('gorden')}}" class="text-reset text-decoration-none">Pasang Gorden</a>
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
                <a class="text-reset fw-bold text-decoration-none" href="#">sadean.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

    <!-- Floating Buttons Whatsapp -->
    <div id="whatsapp">
        <a href="https://wa.me/6285732003433?text=Saya%20ingin%20konsultasi%20dengan%20Sadean.com" id="toggle1" class="wtsapp">
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