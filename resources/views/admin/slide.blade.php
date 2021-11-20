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
                    <form action="{{ url('superadmin/' . $image->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label class="control-label mb-1" for="">Slide 1</label>
                            <input type="file" name="slide1" value="{{ $image->slide }}" class="form-control">
                            <img class="mt-2"
                                src="{{ asset('template/assets/img/slide/' . $image->slide1) }}" width="300px" alt="">
                        </div>
                        <div class="form-group mb-3">
                            <label class="control-label mb-1" for="">Slide 2</label>
                            <input type="file" name="slide2" value="{{ $image->slide2 }}" class="form-control">
                            <img class="mt-2"
                                src="{{ asset('template/assets/img/slide/' . $image->slide2) }}" width="300px" alt="">
                        </div>
                        <div class="form-group mb-3">
                            <label class="control-label mb-1" for="">Slide 3</label>
                            <input type="file" name="slide3" value="{{ $image->slide3 }}" class="form-control">
                            <img class="mt-2"
                                src="{{ asset('template/assets/img/slide/' . $image->slide3) }}" width="300px" alt="">
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
