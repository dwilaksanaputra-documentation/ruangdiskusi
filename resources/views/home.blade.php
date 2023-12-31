<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    
    <body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container flex justify-content-between">
              <a class="navbar-link" href="{{ route('home') }}">
                <img class="h-32px" src="{{ url('assets/images/logo-RD.png') }}" alt="Ruang Diskusi">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Diskusi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-nowrap" href="{{ route('home') }}">Tentang Kami</a>
                  </li>

                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0"  role="search" action="" method="GET">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><img src="{{ url('assets/images/search-logo.png') }}" alt=""></span>
                        <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
                    </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link text-nowrap" href="{{ route('home') }}">Masuk</a>
                    </li>
                    <li class="nav-item ps-1 pe-0">
                        <a class="btn btn-primary-white" href="{{ route('home') }}">Daftar</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>

          <section class="container hero">
            <div class="row align-items-center h-100">
              <div class="col-12 col-lg-6">
                <h1>Diskusi Santuy<br /></h1>
                <h3>Berbagi Informasi dan Pengetahuan</h3>
                <p class="mb-4">Diskusi apa saja, yang penting sopan.</p>
                <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Daftar</a>
                <a href="#" class="btn btn-secondary me-2 mb-2 mb-lg-0">Mulai Diskusi</a>
              </div>

              <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
                <img class="hero-image float-lg-end" src="{{ url('assets/images/gambar-hero.png') }}" alt="">
              </div>
            </div>
          </section>

          <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
