@extends('layouts.main')
@section('content')
    <div class="container mt-5 p-5 border">
        <iframe src="{{ asset('template/assets/ekstra/IKU_2014-2019.pdf') }}" type="application/pdf"
            class="w-100 mx-auto d-block" height="600">
            <p>Your web browser doesn't have a PDF plugin.
                Instead you can <a href="{{ asset('template/assets/ekstra/IKU_2014-2019.pdf') }}">click here to
                    download the PDF file.</a></p>
        </iframe>
        <hr>
    </div>
@endsection
