<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('/assets/')}}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - PPKD JP</title>

    <meta name="description" content="" />

   @include('layout.inc.css')
  </head>

  <body>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
              <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                      <img src="{{asset('assets/admin/assets/img/ppkd.jpg')}}" alt="" width="50" height="50">
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">Perpustakaan Adhan Makmur Sejahtera</span>
                  </a>
                </div>


                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-1">Data Loan<h6 class="text-muted fw-light">Senyum. Sapa, Salam</h6></h4>

                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Loan transaction</h5>
                                    <small class="text-muted float-end">Loan transaction for member</small>
                                </div>


                                <form method="GET" action="" class="mb-4">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama" value="{{ request('search') }}">
                                      </div>
                                      <div class="col-md-4">
                                          {{-- <select name="jurusan" class="form-control">
                                              <option value="">Pilih Jurusan</option>
                                              @foreach($jurusans as $jurusan)
                                                  <option value="{{ $jurusan->id }}" {{ request('jurusan') == $jurusan->id ? 'selected' : '' }}>
                                                      {{ $jurusan->nama_jurusan }}
                                                  </option>
                                              @endforeach
                                          </select> --}}
                                      </div>
                                      <div class="col-md-4">
                                          <button type="submit" class="btn btn-primary">Filter</button>
                                          {{-- <a href="{{ route('peserta.index') }}" class="btn btn-secondary">Reset</a> --}}
                                      </div>
                                  </div>
                              </form>



                                <form action="#" method="post" class="card-body row g-3">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">member name</label>
                                            <input name="nama_lengkap" type="text" class="form-control" id="basic-default-fullname" placeholder="member name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">no transaction</label>
                                            <input readonly name="kartu_keluarga" type="text" class="form-control" id="basic-default-company" placeholder="number trx" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">New member</label>
                                            <br>
                                            <a href="{{ route('member.create') }}" class="btn btn-primary">Add member</a>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Aktivitas saat ini</label>
                                        <textarea
                                            name="aktivitas_saat_ini"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Ceritakan aktivitas yang anda lakukan saat ini"
                                        ></textarea>
                                    </div> --}}

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                   <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>

                                </form>
                            </div>


                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Masukan data diri anda!</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Action</th>
                                      <th>Books name</th>
                                      <th>Loaner name</th>
                                      <th>Date of loan</th>
                                      <th>Date of return</th>
                                      <th>Description</th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                      
                          
                                    {{-- @foreach ($datas as $data) --}}
                                      
                                    <tr>
                                      <td><i class="fab fa-react fa-lg text-info me-3"></i><strong>###</strong></td>
                                      <td>
                                          <div class="col-lg-4 col-md-6">
                                            <div class="mt-3">
                          
                                              <a class="btn btn-info" href="">
                                                <i class="bx bx-edit-alt me-1"></i>Edit
                                              </a>
                          
                                              <button
                                              type="button"
                                              class="btn btn-danger"
                                              data-bs-toggle="modal"
                                              data-bs-target="#modalToggle"
                                              >
                                              <i class="bx bx-printer me-1"></i>print
                                              </button>
                          
                                              <!-- Modal 1-->
                                                <div
                                                class="modal fade"
                                                id="modalToggle"
                                                aria-labelledby="modalToggleLabel"
                                                tabindex="-1"
                                                style="display: none"
                                                aria-hidden="true"
                                                >
                                                              <div class="modal-dialog modal-dialog-centered">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <h5 class="modal-title" id="modalToggleLabel">
                                                                          Apakah anda yakin ingin menghapus data ini?
                                                                        </h5>
                                                                        <button
                                                                          type="button"
                                                                          class="btn-close"
                                                                          data-bs-dismiss="modal"
                                                                          aria-label="Close"
                                                                      ></button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                          Data yang terhapus akan dipindahkan ke riwayat hapus. Anda yakin?
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                          <form action="" method="POST">
                                                                              @csrf
                                                                              @method('DELETE')
                                                                              <button type="submit" class="btn btn-danger">
                                                                                  <i class="bx bx-trash me-1"></i> Ya, Hapus!</button>
                                                                          </form>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                </div>
                                            </div>
                                          </div>
                                      </td>
                                    </tr>
                                      
                                      {{-- @endforeach --}}
                                  </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>




                <p class="text-center">
                  <span>Sudah daftar?</span>
                  <a href="#">
                    <span>Lihat pengumuman</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>

  @include('layout.inc.js')
  </body>
</html>
