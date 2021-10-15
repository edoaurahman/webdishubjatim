<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- include libraries(jQuery, bootstrap) -->
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
            <div class="col-md-12">

              
              <div class="card-body">
                <form action="{{ url('superadmin/berita/update/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">Judul Berita</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Slug</label>
                    <input type="text" placeholder="Contoh : terjerat-hutang-online-pemuda-bunuh-diri" value="{{ $post->slug }}" name="slug" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Excerpt / Potongan Deskripsi Berita</label>
                        <input type="text" class="form-control" name="excerpt" value="{{ $post->excerpt }}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Deskripsi Berita</label>
                    <input type="text" name="body" id="summernote">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Gambar</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('template/assets/img/berita/'.$post->image)}}" width="300px" alt="">
                  </div>
                  <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            $('#summernote').summernote("code", {!! json_encode($post->body) !!});
        });
    </script>
  </body>
</html>