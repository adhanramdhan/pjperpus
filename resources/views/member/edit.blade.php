@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit member</h5>
        <small class="text-muted float-end">member menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('member.update' , $edit->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Member Name</label>
            <input name="member_name" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->member_name}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Email</label>
            <input name="email" type="email" class="form-control" id="basic-default-fullname" value="{{ $edit->email }}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">No telephone</label>
            <input name="no_tlp" type="number" class="form-control" id="basic-default-fullname" value="{{ $edit->no_tlp }}">
          </div>
       
          <button type="submit" value="Update" class="btn btn-success">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Back</a>
        </form>


      </div>
    </div>

</div>
    

@endsection
