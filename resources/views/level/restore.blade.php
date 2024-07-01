@extends('layout.app')
@section('content')

<div class="card">
    <h5 class="card-header">Data user yang sudah terhapus</h5>
    <div class="table-responsive text-nowrap">
        <div class="mx-5 divider text-end">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
          </div>
          @if ($datasampah ->isEmpty())
          <h4 class="card-body">Tidak ada data yang terhapus atau sudah di hapus permanen</h4>
           @else

          <form action="{{ route('level.restores') }}" method="POST">
            @csrf
            <table class="table">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>Nama User</th>                    
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($datasampah as $data)
                <tr>
                    <td>
                        <input type="checkbox" name="ids[]" value="{{ $data->id }}">
                    </td>
                    <td>{{$data->nama_level}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <button type="submit" name="restore" class="btn btn-success">Restore</button>
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
                                    Apakah anda yakin ingin menghapus permanen data ini?
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                                </div>
                                <div class="modal-body">
                                    Data yang terhapus akan terhapus permanen dari database. Anda yakin?
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="forceDelete" class="btn btn-danger">
                                    <i class="bx bx-trash me-1"></i> Ya, Hapus!</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </form>
         @endif
    </div>
    <h6 class="card-footer mt-4">Made by Bintang Ramdhan for UJK Web Programming PPKD Jakarta Pusat 2024</h6>
</div>


@endsection
