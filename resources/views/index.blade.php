@extends('layouts.main')
@section('content')
    <!-- ======= Tentang Kami ======= -->

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img style="height: 500px;"
                        src="{{ asset('template') }}/assets/img/content/{{ $content->img_kepala_dishub }}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $content->yt }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-1">
                    <div class="section-title">
                        <h2>BERITA TERKINI</h2>

                        <div class="conatainer">
                            <div id="conth" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#conth" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#conth" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#conth" data-bs-slide-to="2"></li>
                                    <li data-bs-target="#conth" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#conth" data-bs-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner warna" role="listbox">
                                    <div class="carousel-item item-slide active">
                                        <div class="overlay-image"
                                            style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $post[0]->pict }}')">
                                        </div>
                                        <div class="container position-image">
                                            <h6>{{ $post[0]->judul }}</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item item-slide">
                                        <div class="overlay-image"
                                            style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $post[1]->pict }}')">
                                        </div>
                                        <div class="container position-image">
                                            <h6>{{ $post[1]->judul }}</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item item-slide ">
                                        <div class="overlay-image"
                                            style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $post[2]->pict }}')">
                                        </div>
                                        <div class="container position-image">
                                            <h6>{{ $post[2]->judul }}</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item item-slide ">
                                        <div class="overlay-image"
                                            style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $post[3]->pict }}')">
                                        </div>
                                        <div class="container position-image">
                                            <h6>{{ $post[3]->judul }}</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item item-slide ">
                                        <div class="overlay-image"
                                            style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $post[4]->pict }}')">
                                        </div>
                                        <div class="container position-image">
                                            <h6>{{ $post[4]->judul }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#conth"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#conth"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-2 order-lg-2">
                    <div class="section-title">
                        <h2>INFORMASI PENTING</h2>
                        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-2 content">
                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($post as $d)
                                        <?php if ($i == 5) {
                                            break;
                                        } ?>
                                        <tr>
                                            <td><img src="{{ asset('template/assets/img/imgnews/' . $d->pict) }}"
                                                    width="130px" alt="..."></td>
                                            <td style="text-align: left"> {{ $d->judul }} <a
                                                    href="{{ asset('/berita') }}/{{ $d->judul }}">Selengkapnya...</a>
                                            </td>
                                            <td></td>

                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/berita" class="btn btn-success position-relative">Berita Lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 order-3 order-lg-3">
                    <hr>
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
@endsection
