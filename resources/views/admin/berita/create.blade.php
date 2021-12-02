@extends('layouts.admin.index')
@section('title', 'Content')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-11">


                    <div class="card-body">
                        <form action="{{ url('superadmin/berita') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Judul Berita</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Sub Judul</label>
                                <input type="text" name="subjudul" class="form-control">
                            </div>
                            <div class="form-group mb-3 w-25">
                                <label for="">Tanggal</label>
                                <input type="date" name="tgl" class=" form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Isi Berita</label>
                                <textarea type="text" name="isi" id="summernote"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gambar</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- Bootstrap JavaScript Libraries -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>

            <script>
                $(document).ready(function() {
                    $('#summernote').summernote();
                });
            </script>
    </body>

    </html>

@endsection
