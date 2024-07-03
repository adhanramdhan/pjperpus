@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah member</h5>
        <small class="text-muted float-end">member menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('member.store') }}" method="POST">
            @csrf

          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Member Name</label>
            <input name="member_name" type="text" class="form-control" id="basic-default-fullname" placeholder="Input your member name"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Email</label>
            <input name="email" type="email" class="form-control" id="basic-default-fullname" placeholder="Masukan email anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">NO HP</label>
            <input name="no_tlp" type="phone" class="form-control" id="basic-default-fullname" placeholder="Masukan nomor telephone anda"/>
          </div>


          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
        </form>


      </div>
    </div>

</div>

@endsection
