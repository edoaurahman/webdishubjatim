<!doctype html>
<html lang="en">

<head>
    <title>Update Slide</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

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
                        <h1>Edit Slide Image </h1>
                        <h5>(optional, use 16:9 ratio)</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('superadmin/' . $image->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Slide 1</label>
                                <input type="file" name="slide1" value="{{ $image->slide }}" class="form-control">
                                <img src="{{ asset('template/assets/img/slide/' . $image->slide1) }}" width="300px"
                                    alt="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Slide 2</label>
                                <input type="file" name="slide2" value="{{ $image->slide2 }}" class="form-control">
                                <img src="{{ asset('template/assets/img/slide/' . $image->slide2) }}" width="300px"
                                    alt="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Slide 3</label>
                                <input type="file" name="slide3" value="{{ $image->slide3 }}" class="form-control">
                                <img src="{{ asset('template/assets/img/slide/' . $image->slide3) }}" width="300px"
                                    alt="">
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

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
