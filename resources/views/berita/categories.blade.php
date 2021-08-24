@extends('layout.template')

@section('content')

    <div class="container mt-3 list-group-flush">
        <h1>
            {{ $title }}
        </h1>
        <br>
        @foreach ($categories as $category)
            <ul>
                <li>
                    <h3><a href="{{ asset('/categories') }}/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
                </li>
            </ul>
        @endforeach

    </div>
@endsection
