<!doctype html>
<html lang="en">
  <head>
    <title>Slide Berita</title>
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
                <div class="card">
                    <div class="card-header">
                        <h1>Tambah Slide Gambar Berita</h1>
                        <a href="{{ url('students') }}" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">
                      
                      <form action="{{ url('/superadmin/edit-berita-gambar/'.$slide_gambar->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                          <label for="">Header</label>
                          <input type="text" name="header" value="{{ $slide_gambar->header }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">isi</label>
                          <input type="text" name="isi" value="{{ $slide_gambar->isi }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Gambar</label>
                          <input type="file" name="image" value="{{ $slide_gambar->gambar }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <button type="submit" class="btn btn-primary">Update Gambar</button>
                        </div>
                      </form>
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