@extends('layouts.admin.index')
@section('title', 'berita')
@section('content')

    <div class="container mt-3">
        <article class="mb-5">
            <h2>{{ $post->judul }}</h2>
            <img src="{{ asset('template/assets/img/imgnews/' . $post->pict) }}" class="gambar-berita" alt="">
            <br><br><br>
            {!! $post->isi !!}
        </article>
        <a name="back-post" id="back-post" class="btn btn-success" href="{{ asset('/superadmin/berita') }}"
            role="button">Kembali</a>
        {{-- <a name="back-post" id="back-post" class="btn btn-danger" href="{{ asset('/superadmin/berita') }}" role="button">Hapus</a> --}}
        <form action="{{ $post->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a name="back-post" id="back-post" class="btn btn-primary"
            href="{{ asset('/superadmin/berita/edit/' . $post->id_news) }}    " role="button">Edit</a>
    </div>
    <br><br><br>

@endsection
