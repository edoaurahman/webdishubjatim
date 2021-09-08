<!doctype html>
<html lang="en">
  <head>
    <title>Create</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/uz8j1f271d8ag8aej18mcv0cuficc1ekf1cbtszodezk4n36/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
                        <h1>Tambah Berita</h1>
                        <a href="{{ url('superadmin/berita') }}" class="btn btn-danger float-end">Kembali</a>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('superadmin/berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="">Judul Berita</label>
                          <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Slug</label>
                          <input type="text" placeholder="Contoh : perpanjangan-ppkm-hari-pertama-15-daerah-di-jatim-masih-zona-merah" name="slug" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Excerpt / Potongan Deskripsi Berita</label>
                          <div class="form-floating">
                            <textarea class="form-control" name="excerpt" placeholder="Excerpt"></textarea>
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Deskripsi Berita</label>
                          <textarea name="body" id="mytextarea" rows="30"></textarea>
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
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
      tinymce.init({
        selector:'#mytextarea',
        plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      })
    </script>
  </body>
</html>