@extends('layouts.main')
@section('title', 'Halaman Admin')
@section('content')

{{-- update slider --}}
<br>
<div class="container">
  <div class="row">
      <div>
        <div class="card">
               <a style="font-size: 28px; font-weight: bold" href="{{ url('/superadmin/header-slide') }}" class="btn btn-primary">Update</a>
          </div>
      </div>
  </div>
</div>
<br><br><br><br>
    <!-- ======= Tentang Kami ======= -->
    
        {{-- {{ $image['filename'] }} --}}
    <section id="about" class="about">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
              <img style="height: 500px;" src="{{ asset('template') }}/assets/img/content/{{ $content->img_kepala_dishub }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $content->yt }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
      {{-- update yt content image --}}
      <br>
      <div class="container">
        <div class="row">
            <div>
              <div class="card">
                    <a style="font-size: 28px; font-weight: bold" href="{{ url('/superadmin/content-yt-image') }}" class="btn btn-primary">Update</a>
                </div>
            </div>
        </div>
      </div>
      <br><br><br><br>
  
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">


            
        <div class="row">
         <div class="col-lg-4 order-2 order-lg-1">
             <div class="section-title">
                <h2>BERITA TERKINI</h2>
                
                <div class="conatainer">
                    <div id="conth" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#conth" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#conth" data-bs-slide-to="1"></li>
                            <li data-bs-target="#conth" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner warna" role="listbox">
                            <div class="carousel-item item-slide active">
                                <div class="overlay-image" style="background-image: url(https://www.silverkris.com/wp-content/uploads/2017/11/Suroboyo-Monument-1024x681.jpg)">
                                </div>
                                <div class="container position-image">
                                    <h4>Lambang Surabaya</h4>
                                    <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                                </div>
                            </div>
                            <div class="carousel-item item-slide">
                                <div class="overlay-image" style="background-image: url(https://www.silverkris.com/wp-content/uploads/2017/10/hotel-majapahit-1024x657.jpg)">
                                </div>
                                <div class="container position-image">
                                    <h4>Hotel Majapahit Surabaya</h4>
                                    <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                                </div>
                            </div>
                            <div class="carousel-item item-slide">
                                <div class="overlay-image" style="background-image: url(https://www.silverkris.com/wp-content/uploads/2017/11/Monumen-Kapal-Selam-750x500.jpg)">
                                </div>
                                <div class="container position-image">
                                    <h4>Monumen Kapal Selam</h4>
                                    <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#conth" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#conth" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                
                
             </div>
            </div>
         <div class="col-lg-8 order-1 order-lg-2">
             <div class="section-title">
                 <h2>INFORMASI PENTING</h2>
                 <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                          {{-- berita akan di tampilkan disini --}}
                        </tbody>
                      </table>
                    </div>
                </div>
             </div>
        </div>    
    </div>
        </div>
      </section><!-- End Services Section -->
      {{-- update yt content image --}}
      <br>
      <div class="container">
        <div class="row">
            <div>
              <div class="card">
                    <a style="font-size: 28px; font-weight: bold" href="{{ url('/superadmin/berita') }}" class="btn btn-primary">Update</a>
                </div>
            </div>
        </div>
      </div>
      <br><br><br><br>
  
      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>
  
        </div>
      </section><!-- End Cta Section -->
  
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <h2>GALERI FOTO</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('template') }}/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <div class="portfolio-links">
                    <a href="{{ asset('template') }}/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Team</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('template') }}/assets/img/team/team-1.jpg" alt="">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('template') }}/assets/img/team/team-2.jpg" alt="">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('template') }}/assets/img/team/team-3.jpg" alt="">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
  
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group mt-3">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection