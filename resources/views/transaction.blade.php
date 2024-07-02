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
                    <span class="app-brand-text demo text-body fw-bolder">Pendaftaran Peserta</span>
                  </a>
                </div>


                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-1">Selamat datang di form perndaftar peserta pelatihan PPKD jakarta pusat<h6 class="text-muted fw-light">/Ikutilah kejurusan sesuai passion anda!</h6></h4>

                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Masukan data diri anda!</h5>
                                    <small class="text-muted float-end">Default label</small>
                                </div>
                                <form action="{{ route('actionDP') }}" method="post" class="card-body row g-3">
                                    @csrf
                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                                            <input name="nama_lengkap" type="text" class="form-control" id="basic-default-fullname" placeholder="JNama lengkap anda" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">no kartu keluarga</label>
                                            <input name="kartu_keluarga" type="text" class="form-control" id="basic-default-company" placeholder="Masukan KK anda" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-email">Email</label>
                                            <div class="input-group input-group-merge">
                                                <input
                                                    name="email"
                                                    type="text"
                                                    id="basic-default-email"
                                                    class="form-control"
                                                    placeholder="example1@example.com"
                                                    aria-label="example1@example.com"
                                                    aria-describedby="basic-default-email2"
                                                />
                                            </div>
                                            <div class="form-text">You can use letters, numbers & periods</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Phone</label>
                                            <input
                                                name="nomor_hp"
                                                type="text"
                                                id="basic-default-phone"
                                                class="form-control phone-mask"
                                                placeholder="08xx xxxx xxxx"
                                            />
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="basic-default-gender ">Jenis Kelamin : </label>

                                            <div class="form-check form-check-inline mt-3">
                                                <input
                                                  class="form-check-input mx-3"
                                                  type="radio"
                                                  name="jenis_kelamin"
                                                  id="inlineRadio1"
                                                  value="Laki-laki"
                                                />
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input
                                                  class="form-check-input"
                                                  type="radio"
                                                  name="jenis_kelamin"
                                                  id="inlineRadio2"
                                                  value="Perempuan"
                                                />
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                              </div>

                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-company">Pendidikan Terakhir</label>
                                            <input name="pendidikan_terakhir" type="text" class="form-control" id="basic-default-company" placeholder="Masukan nik anda" />
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan tempat lahir anda" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="html5-date-input" class="form-label">Tanggal lahir</label>
                                            <input class="form-control" name="tanggal_lahir" type="date" value="2021-06-18" id="html5-date-input" />
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Nama sekolah</label>
                                            <input name="nama_sekolah" type="text" class="form-control" id="basic-default-fullname" placeholder="JNama sekolaah anda anda" />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Kejuruan</label>
                                            <input name="kejuruan" type="text" class="form-control" id="basic-default-fullname" placeholder="Nama sekolaah anda anda" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Pilih kejuruan</label>



                                            <select name="id_jurusan" id="id_jurusan" class="form-select" aria-label="Default select example">

                                              <option selected>Open this select menu</option>
                                              @foreach ($jurusan as $dataj)
                                              <option value="{{$dataj->id}}">{{$dataj->nama_jurusan}}</option>
                                              @endforeach
                                            </select>


                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Pilih Gelombang</label>


                                            <select name="id_gelombang" id="id_gelombang" class="form-select" aria-label="Default select example">
                                              <option selected>Open this select menu</option>
                                              @foreach ($gelombang as $datag)
                                              <option value="{{$datag->id}}">{{$datag->nama_gelombang}}</option>
                                              @endforeach
                                            </select>


                                        </div>

                                

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-message">Aktivitas saat ini</label>
                                        <textarea
                                            name="aktivitas_saat_ini"
                                            id="basic-default-message"
                                            class="form-control"
                                            placeholder="Ceritakan aktivitas yang anda lakukan saat ini"
                                        ></textarea>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                <p class="text-center">
                  <span>Sudah daftar?</span>
                  <a href="{{ route('pengumuman') }}">
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
