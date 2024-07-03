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
                      <img src="{{asset('assets/admin/assets/img/helocat.gif')}}" alt="" width="50" height="50">
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

                                <form action="{{ route('showTrx') }}" method="get" class="card-body row g-3">
                                  @csrf
                                      <div class="col-md-6">
                                          <div class="mb-3 row">
                                              <label for="html5-search-input" class="col-md-2 col-form-label">Search Name</label>
                                              <div class="col-md-10">
                                                  <input name="search" class="form-control" type="search" value="{{ request('search') }}" id="html5-search-input" />
                                              </div>
                                          </div>                              
                                      </div>

                                      <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">New member</label>
                                            <br>
                                            <a href="{{ route('member.create') }}" class="btn btn-primary">Add member</a>
                                        </div>
                                    </div>
                                  </form>
                              

                                <form action="{{ route('loaningstore') }}" method="post" class="card-body row g-3">
                                    @csrf
                                    <div class="col-md-6">         

                                      <div class="input-group">
                                        <div class="input-group-text">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value=""
                                                id="disabledCheck2"
                                                {{ isset($memberz) ? 'checked' : '' }}
                                                disabled
                                            />
                                        </div>
                                        <input type="hidden" name="id_member" value="{{ isset($memberz) ? $memberz->id : '' }}" />
                                        <input disabled type="text" class="form-control" aria-label="Text input with checkbox"
                                            value="{{ isset($memberz) ? $memberz->member_name : '' }}" />  {{-- Tampilkan hasil pencarian di sini --}}
                                    </div>


                                    <br>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">no transaction</label>
                                            <input readonly name="no_trx" type="text" class="form-control" id="basic-default-company" placeholder="" value="{{ $transactionCode }}" />
                                        </div>
                                    </div>

                               

                                    <div class="col-12 text-end">
                                      <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>

                                </form>

                            </div>


                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Ini data apa?!</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                
                                <table class="table">
                                  <div align="right" class="m-b">
                                    <button type="button" class="btn btn-primary m-3 btn-add">Tambah</button>
                                  </div>
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>action</th>
                                      <th>books name</th>
                                      <th>date of loan</th>
                                      <th>date of return</th>
                                      <th>description</th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                      
                          
                                    {{-- @foreach ($datas as $data) --}}
                                      
                                    <tr>
                                      <td><i class="fab fa-react fa-lg text-info me-3"></i><strong>#1</strong></td>
                                      <td>
                                          <div class="col-lg-4 col-md-6">
                                            <div class="mt-3">
                          
                                              <button
                                              type="button"
                                              class="btn btn-danger"
                                              data-bs-toggle="modal"
                                              data-bs-target="#modalToggle"
                                              >
                                              <i class="bx bx-trash me-1"></i>delete
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
                                      <td>
                                        <select name="id_book[]" id="">
                                          <option value="">Select books</option>
                                          <option value=""></option>
                                        </select>
                                      </td>
                                      <td>
                                          <div class="col-md-10">
                                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                                          </div>
                                      </td>
                                      <td>
                                        <div class="col-md-10">
                                          <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                                        </div>
                                      </td>
                                      <td>#</td>
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

  <script>
    $('.btn-add').click(function() {
      alert('kontol');-
    });
  </script>
  </body>
</html>
