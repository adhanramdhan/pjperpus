@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit book</h5>
        <small class="text-muted float-end">book menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('book.update' , $edit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="formFile" class="form-label">Book image</label>
              <img src="{{ asset('upload/' . $edit->books_img) }}" width="100">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Change book image</label>
              <input name="books_img" class="form-control" type="file" id="formFile" />
            </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama book</label>
            <input name="books_name" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->books_name}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Publisher</label>
            <input name="publisher" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->publisher}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Author</label>
            <input name="author" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->author}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Quantity</label>
            <input name="qty" type="number" class="form-control" id="basic-default-fullname" value="{{ $edit->qty}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Description</label>
            <input name="description" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->description}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Genre</label>
            <input name="genre" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->genre}}"/>
          </div>

       
          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
        </form>


      </div>
    </div>

</div>
    

@endsection
