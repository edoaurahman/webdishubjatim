@extends('layouts.main')
@section('content')
    <div class="container mt-5 p-5 border">
        <iframe src="{{ asset('template/assets/ekstra/IKU_2019-2024.pdf') }}" type="application/pdf"
            class="w-100 mx-auto d-block" height="600">
        </iframe>
        <hr>
    </div>
@endsection
