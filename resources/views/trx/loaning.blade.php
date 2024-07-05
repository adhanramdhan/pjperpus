

@extends('layout.app')
@section('content')

<div class="card">
    <h5 class="card-header">Data LOAN</h5>
    <div class="table-responsive text-nowrap">
        <div class="mx-5 divider text-end">

            <a href="{{ route('showTrx') }}" class="btn btn-primary">Create</a>
            <a href="" class="btn btn-info">History</a>

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
                  <th>no transaction</th>
                  <th>members name</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                  
      
                {{-- @foreach ($datas as $data) --}}
                  
                @foreach ($datas as $data)
                <tr>
                    
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->no_trx }}</td>
                  <td>{{ $data->loanname->member_name }}</td>
                  <td>
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter{{ $data->id }}"
                        >
                          Detail
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter{{ $data->id }}" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Detail loans</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>

                              <div class="modal-body">
                                <h5>no transaction: {{ $data->no_trx }}</h5>
                                <dl class="row mt-2">
                                  <dt class="col-sm-3">member</dt>
                                  <dd class="col-sm-9">: {{ $data->loanname->member_name }}</dd>
                          

                                  <dt class="col-sm-3">borrowed book</dt>
                                  <dd class="col-sm-9">:</dd>
                                  @foreach ($data->dls as $detail)
                                    
                                  <dd class="col-sm-12">- - {{ $detail->books->books_name }}</dd>
                                  @endforeach
                                  
                                  
                                  <dt class="col-sm-3">Date of loan</dt>
                                  <dd class="col-sm-9">
                                   : {{ $detail->dateOfloan }}
                                  </dd>
          
                                  <dt class="col-sm-3">Due return</dt>
                                  <dd class="col-sm-9">: {{ $detail->dateOfreturn }}
                                  </dd>

                                      <dt class="col-sm-3">Description</dt>
                                      <dd class="col-sm-9">
                                        : {{ $detail->descriptions }}
                                      </dd>
                                    
                                </dl>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <a class="btn btn-primary" href="{{ route('loans.print', $data->id) }}">
                      <i class="bx bx-printer me-1"></i> Print
                  </a>

                  </td>
                  
                </tr>
                @endforeach
                  
                  {{-- @endforeach --}}
              </tbody>
            </table>


        </div>


      {{-- <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama member</th>
            <th>Email</th>
            <th>No hp</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($datas as $data)


          <tr>
            <td><i class="fab fa-react fa-lg text-info me-3"></i><strong>{{ $loop->iteration }}</strong></td>
            <td>{{$data->nama_anggota}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->no_tlp}}</td>
            <td>
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">

                                <a class="btn btn-info" href="{{ route('member.edit' , $data->id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Edit</a>

                                <button
                                    type="button"
                                    class="btn btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalToggle{{ $data->id }}"
                                >
                                <i class="bx bx-trash me-1"></i>delete
                                </button>

                                <!-- Modal 1-->
                                <div
                                    class="modal fade"
                                    id="modalToggle{{ $data->id }}"
                                    aria-labelledby="modalToggleLabel{{ $data->id }}"
                                    tabindex="-1"
                                    style="display: none"
                                    aria-hidden="true"
                                >
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="modalToggleLabel{{ $data->id }}">
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
                                                <form action="{{ route('member.destroy', $data->id) }}" method="POST">
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
          @endforeach
        </tbody>
      </table> --}}
    </div>
    <h6 class="card-footer mt-4">Made by Bintang Ramdhan for UJK Web Programming PPKD Jakarta Pusat 2024</h6>
</div>



@endsection


