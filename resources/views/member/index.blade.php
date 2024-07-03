@extends('layout.app')
@section('content')

<div class="card">
    <h5 class="card-header">Data member</h5>
    <div class="table-responsive text-nowrap">
        <div class="mx-5 divider text-end">

            <a href="{{route('member.create')}}" class="btn btn-primary">Create</a>
            <a href="{{route('memberhistory')}}" class="btn btn-info">History</a>

          </div>



      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Member Name</th>
            <th>Email</th>
            <th>No hp</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($datas as $data)


          <tr>
            <td><i class="fab fa-react fa-lg text-info me-3"></i><strong>{{ $loop->iteration }}</strong></td>
            <td>{{$data->member_name}}</td>
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
      </table>
    </div>
    <h6 class="card-footer mt-4">Made by Bintang Ramdhan for UJK Web Programming PPKD Jakarta Pusat 2024</h6>
</div>



@endsection
