@extends('layout.app')
@section('content')

<div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Selamat datang, {{ Auth::user()->name }} ! 🎉</h5>
             <p class="mb-4">
              Kamu berhasil login sebagai <span class="fw-bold">{{ Auth::user()->levels->nama_level }}.</span> Jelajahi fitur 
              yang tersedia sesuai level yang kamu miliki.
            </p>

            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="{{asset('assets/admin/assets/img/helocat2.gif')}}"
              height="140"
              alt="View Badge User"
              data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png"
            />
            <img
              src="{{asset('assets/admin/assets/img/helocat.gif')}}"
              height="140"
              alt="View Badge User"
              data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png"
            />
          </div>
        </div>
      </div>
    </div>
</div>



@endsection
