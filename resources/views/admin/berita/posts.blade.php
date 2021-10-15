<!doctype html>
<html lang="en">
  <head>
    <title>Berita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
    <div class="container mt-3">
        @if (session('status'))
                  <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif        
        <div class="position-relative">
            <div class="card-header">
                <h1 class="mb-5">{{ $title }}</h1>
                <a href="/superadmin/berita/create" class="btn btn-primary"">Tambah Berita</a>
                <a href="/superadmin" class="btn btn-primary"">Kembali</a>
            </div>
        </div>
        
        <hr>
        @foreach ($posts as $post)
            <article class="mb-5 border-bottom pb-4">
                <h2>
                    <a href="{{asset('/superadmin/berita')}}/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h2>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>