<!DOCTYPE html>
<html lang="en">

<head>
  <title>Berita</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template') }}/assets/img/icon.png" rel="icon">
  <link href="{{ asset('template') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template') }}/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('template') }}/assets/css/image_berita.css">

  <!-- =======================================================
  * Template Name: Green - v4.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="{{ asset('/') }}" class="logo me-auto"><img src="{{ asset('template') }}/assets/img/logo-jatim.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        {{-- <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
        <li><a class="nav-link scrollto" href="#services">Berita</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
        {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
        {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> --}}
        {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
        @if (isset($logout))
        
        <button style="margin-left: 20px" onclick="location.href='{{ url('/'.$logout) }}'" type="button" class="btn btn-outline-danger">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"></path>
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"></path>
          </svg>
          {{ $logout }}
        </button>

        @endif
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
  <body>
    <div class="container mt-12">
        <article class="mb-5">
          <br><br>
            <h2>{{ $post->title }}</h2>
            <br>
            <img src="{{ asset('template/assets/img/berita/'.$post->image)}}" class="gambar-berita tengah" alt="">
            <br><br><br>
            {!! $post->body !!}
        </article>
        <a name="back-post" id="back-post" class="btn btn-success" href="{{ asset('/') }}" role="button">Kembali</a>
    </div>
    <br><br><br>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MEDSOS DISHUB JATIM</h3>
      <p>Di Kelola Oleh Sekretariat Dinas Perhubungan Provinsi Jawa Timur</p>
      <div class="social-links">
        <a href="https://twitter.com/dishubjatim" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/dishubjawatimur/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/dishubjatim/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('template') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('template') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('template') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template') }}/assets/js/main.js"></script>
</html>