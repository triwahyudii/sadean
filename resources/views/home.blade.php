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
                        <a href="#" class="btn btn-warning fw-bold">Hubungi Kami</a>
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
    </div>
</body>

</html>