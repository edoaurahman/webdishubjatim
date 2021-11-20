@extends('layouts.admin.index')
@section('title', 'Content')
@section('content')



    <div class="container mt-3">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

        <div class="position-relative">
            <div class="card-header">
                <h1 class="mb-5">{{ $title }}</h1>
                <a href="/superadmin/berita/create" class="btn btn-primary"">Tambah Berita</a>
                         </div>
                    </div>

                       @foreach ($posts as $post)
                    <article class="mb-5 border-bottom pb-4">
                        <h2><a href="{{ asset('/superadmin/berita') }}/{{ $post->judul }}"
                                class="text-decoration-none">{{ $post->judul }}</a></h2>
                        <p>{!! Str::limit($post->isi, 150) !!}</p>
                    </article>
                    @endforeach
            </div>

        @endsection
