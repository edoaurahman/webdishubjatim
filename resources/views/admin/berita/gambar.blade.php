<!doctype html>
<html lang="en">
  <head>
    <title>Update Gambar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h1>Update Gambar Berita</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Header</td>
                                <td>Isi</td>
                                <td>Gambar</td>
                                <td>Edit</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gambar_slide as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->header }}</td>
                                    <td>{{ $item->isi }}</td>
                                    <td>
                                        <img src="{{ asset('template/assets/img/berita/gambar/'.$item->gambar)}}" width="100px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('/superadmin/edit-berita-gambar/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>