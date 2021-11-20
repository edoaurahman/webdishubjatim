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
                    style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $slide_berita[0]->pict }}')">
                </div>
                <div class="container position-image">
                    <h6>{{ $slide_berita[0]->judul }}</h6>
                </div>
            </div>
            <div class="carousel-item item-slide">
                <div class="overlay-image"
                    style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $slide_berita[1]->pict }}')">
                </div>
                <div class="container position-image">
                    <h6>{{ $slide_berita[1]->judul }}</h6>
                </div>
            </div>
            <div class="carousel-item item-slide ">
                <div class="overlay-image"
                    style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $slide_berita[2]->pict }}')">
                </div>
                <div class="container position-image">
                    <h6>{{ $slide_berita[2]->judul }}</h6>
                </div>
            </div>
            <div class="carousel-item item-slide ">
                <div class="overlay-image"
                    style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $slide_berita[3]->pict }}')">
                </div>
                <div class="container position-image">
                    <h6>{{ $slide_berita[3]->judul }}</h6>
                </div>
            </div>
            <div class="carousel-item item-slide ">
                <div class="overlay-image"
                    style="background-image: url('{{ asset('template') }}/assets/img/imgnews/{{ $slide_berita[4]->pict }}')">
                </div>
                <div class="container position-image">
                    <h6>{{ $slide_berita[4]->judul }}</h6>
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
