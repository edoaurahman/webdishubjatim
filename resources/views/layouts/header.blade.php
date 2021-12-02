<!-- ======= Hero Section ======= -->
<section id="hero" class="{{ $title === 'Profile Dinas Perhubungan Provinsi Jawa Timur' ? 'd-none' : '' }}">>
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image: url({{ asset('template') }}/assets/img/slide/{{ $image->slide1 }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Web Dinas Perhubungan
                                Jatim</span></h2>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item"
                style="background-image: url({{ asset('template') }}/assets/img/slide/{{ $image->slide2 }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Web Dinas Perhubungan
                                Jatim</span></h2>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item"
                style="background-image: url({{ asset('template') }}/assets/img/slide/{{ $image->slide3 }})">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Web Dinas Perhubungan
                                Jatim</span></h2>
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
