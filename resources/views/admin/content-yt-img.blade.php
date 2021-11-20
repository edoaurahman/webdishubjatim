@extends('layouts.admin.index')
@section('title', 'Content')
@section('content')

    {{-- update slider --}}
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Youtube and Image </h1>
                        <h5>(optional, use 16:9 ratio)</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('superadmin/content-yt-image/' . $content->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3 col-md-4">
                                <img src="{{ asset('template/assets/img/content/cara-update-youtube.png') }}"
                                    style="border-radius: 12px" width="400px" alt="">
                                <br>
                                <label class="control-label mb-1" for="">Youtube</label>
                                <input type="text" name="yt" value="{{ $content->yt }}" class="form-control">
                                <div class="ratio ratio-16x9 mt-2">
                                    <iframe width="560" height="315"
                                        src="https://www.youtube.com/embed/{{ $content->yt }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="control-label mb-1" for="">Image Dishub</label>
                                <input type="file" name="img_kepala_dishub" value="{{ $content->img_kepala_dishub }}"
                                    class="form-control">
                                <img class="mt-2"
                                    src="{{ asset('template/assets/img/content/' . $content->img_kepala_dishub) }}"
                                    width="300px" alt="">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Slide</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
