@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Level</h5>
        <small class="text-muted float-end">level menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('user.update' , $edit->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Username</label>
            <input name="name" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->name}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Email</label>
            <input name="email" type="email" class="form-control" id="basic-default-fullname" value="{{ $edit->email }}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Password</label>
            <input name="password" type="password" class="form-control" id="basic-default-fullname" placeholder="***"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Select level</label>
            <br>
            <select name="id_level" id="">
              <option value="" disabled>Choose level</option>
              @foreach ($levels as $level)
              <option value="{{ $level->id }}" {{ $level->id == $edit->id ? 'selected' : '' }} >{{ $level->nama_level }}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </form>

      </div>
    </div>

</div>
    

@endsection
