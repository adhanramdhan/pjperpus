@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Level</h5>
        <small class="text-muted float-end">level menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('levels.update' , $edit->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama Level</label>
            <input name="nama_level" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->nama_level }}"/>
          </div>
          <button type="submit" value="Update" class="btn btn-primary">Send</button>
        </form>

      </div>
    </div>

</div>
    

@endsection
