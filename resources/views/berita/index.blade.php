<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Berita</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="template/assets/img/icon.png" rel="icon">
    <link href="template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="template/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green - v4.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ asset('/') }}" class="logo me-auto"><img
                    src="{{ asset('template') }}/assets/img/logo-jatim.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link " href="/profile">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @if (isset($admin))
                        <li><a class="nav-link scrollto" href="{{ url('/superadmin/' . $admin) }}">Update User dan
                                Pass</a>
                        </li>
                    @endif
                    @if (isset($logout))

                        <button style="margin-left: 20px" onclick="location.href='{{ url('/' . $logout) }}'"
                            type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z">
                                </path>
                            </svg>
                            {{ $logout }}
                        </button>

                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('template') }}/assets/img/imgnews/{{ $post[0]->pict }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $post[0]->judul }}</h2>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url({{ asset('template') }}/assets/img/imgnews/{{ $post[1]->pict }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $post[0]->judul }}</h2>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url({{ asset('template') }}/assets/img/imgnews/{{ $post[2]->pict }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $post[0]->judul }}</h2>
                        </div>
                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->



    <!-- ======= Tentang Kami ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-1">
                    <div class="section-title">
                        <h2>BERITA TERKINI</h2>
                        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-2 content">
                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($post as $d)
                                        <?php if ($i == 20) {
                                            break;
                                        } ?>
                                        <tr>
                                            <td><img src="{{ asset('template/assets/img/imgnews/' . $d->pict) }}"
                                                    width="130px" alt="..."></td>
                                            <td style="text-align: left"> {{ $d->judul }} <a
                                                    href="{{ asset('/berita') }}/{{ $d->judul }}">Selengkapnya...</a>
                                            </td>

                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="info">

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{ $contact->email }}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $contact->nomer }}</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Fax:</h4>
                            <p>{{ $contact->fax }}</p>
                        </div>

                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>MP5H+WC Menanggal, Surabaya City, East Java, Indonesia</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.121609223858!2d112.72631595033015!3d-7.340237974213932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb45124b979b%3A0xe40ae1a86cf969ec!2sDinas%20Perhubungan%20Provinsi%20Jawa%20Timur!5e0!3m2!1sen!2ssg!4v1629724507034!5m2!1sen!2ssg"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>MEDSOS DISHUB JATIM</h3>
            <p>Di Kelola Oleh Sekretariat Dinas Perhubungan Provinsi Jawa Timur</p>
            <div class="social-links">
                <a href="https://twitter.com/dishubjatim" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/dishubjawatimur/" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/dishubjatim/" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="template/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="template/assets/vendor/php-email-form/validate.js"></script>
    <script src="template/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="template/assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>

</body>

</html>
