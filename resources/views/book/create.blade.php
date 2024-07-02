@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah book</h5>
        <small class="text-muted float-end">book menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('book.store') }}" method="POST">
            @csrf

          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Book name</label>
            <input name="books_name" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan nama lengkap anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Publisher</label>
            <input name="publisher" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan email anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Author</label>
            <input name="author" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan nomor telephone anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Quantity</label>
            <input name="qty" type="number" class="form-control" id="basic-default-fullname" placeholder="Masukan nomor telephone anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Description</label>
            <input name="description" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan nomor telephone anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Genre</label>
            <input name="genre" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan nomor telephone anda"/>
          </div>


          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
        </form>


      </div>
    </div>

</div>

@endsection
