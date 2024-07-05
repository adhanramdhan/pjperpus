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

                <h4 class="fw-bold py-3 mb-1 mx-4">Data Loan
                  <h6 class="text-muted fw-light mx-4">Senyum. Sapa, Salam</h6>
              </h4>
                
<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="bx bx-menu bx-sm"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
  <!-- Search -->
  
  <i class="bx bx-search fs-4 lh-0"></i>
  
    <input name="search" id="memberSearch" class="form-control border-0 shadow-none" type="search" placeholder="Find member name"/>


  <div class="navbar-nav align-items-center">
    <div class="nav-item d-flex align-items-center">
      
      <a href="{{ route('member.create') }}" class="btn btn-primary mx-3">Add member</a>
      <a href="{{ route('trx.loaning') }}" class="btn btn-primary">back to history trx</a>
    </div>
  </div>
  <!-- /Search -->

</div>
</nav>

                

                  <div class="container-xxl flex-grow-1 container-p-y">
                
                    <div class="row">
                        <form action="{{ route('loaningstore') }}" method="post" class="card-body row g-3">
                            @csrf
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Loan transaction</h5>
                                        <small class="text-muted float-end">Loan transaction for member</small>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="input-group mx-4">
                                          <div class="input-group-text">
                                              <input
                                                  class="form-check-input"
                                                  type="checkbox"
                                                  id="disabledCheck2"
                                                  {{ isset($memberz) ? 'checked' : '' }}
                                                  disabled
                                              />
                                          </div>
                                          <input type="hidden" name="id_member" value="{{ isset($memberz) ? $memberz->id : '' }}" />
                                          <input disabled type="text" id="selectedMemberName" class="form-control" aria-label="Text input with checkbox"
                                              value="{{ isset($memberz) ? $memberz->member_name : '' }}" />
                                      </div>
                                  
                                      <div class="m-4">
                                          <label for="memberSelect" class="form-label">Select Member</label>
                                          <select
                                              multiple
                                              class="form-select"
                                              id="memberSelect"
                                              aria-label="Multiple select example"
                                          >
                                              <!-- Options will be dynamically populated -->
                                          </select>
                                      </div>
                                      <br>
                                      <div class="mb-3 mx-4">
                                          <label class="form-label" for="basic-default-company">no transaction</label>
                                          <input readonly name="no_trx" type="text" class="form-control" id="basic-default-company" placeholder="" value="{{ $transactionCode }}" />
                                      </div>
                                  </div>
                                  
                                    {{-- <div class="col-md-6">
                                      <div class="input-group mx-4">
                                          <div class="input-group-text">
                                              <input
                                                  class="form-check-input"
                                                  type="checkbox"
                                                  id="disabledCheck2"
                                                  {{ isset($memberz) ? 'checked' : '' }}
                                                  disabled
                                              />
                                          </div>
                                          <input type="hidden" name="id_member" id="id_member" value="{{ isset($memberz) ? $memberz->id : '' }}" />
                                          <input disabled type="text" class="form-control" id="member_name_display" aria-label="Text input with checkbox"
                                              value="{{ isset($memberz) ? $memberz->member_name : '' }}" />
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlSelect2" class="form-label">Select member</label>
                                          <select multiple class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                              @foreach ($msname as $item)
                                                  <option value="{{ $item->id }}">{{ $item->member_name }}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <br>
                                      <div class="mb-3 mx-4">
                                          <label class="form-label" for="basic-default-company">no transaction</label>
                                          <input readonly name="no_trx" type="text" class="form-control" id="basic-default-company" placeholder="" value="{{ $transactionCode }}" />
                                      </div>
                                  </div> --}}


                                    {{-- <div class="col-md-6">
                                        <div class="input-group mx-4">
                                            <div class="input-group-text">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="disabledCheck2"
                                                    {{ isset($memberz) ? 'checked' : '' }}
                                                    disabled
                                                />
                                            </div>
                                            <input type="hidden" name="id_member" value="{{ isset($memberz) ? $memberz->id : '' }}" />
                                            <input disabled type="text" class="form-control" aria-label="Text input with checkbox"
                                                value="{{ isset($memberz) ? $memberz->member_name : '' }}" />

                                              </div>
                                              <div class="mb-3">
                                                <label for="exampleFormControlSelect2" class="form-label">Select member</label>
                                                <select multiple class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                                    @foreach ($msname as $item)
                                                        <option value="{{ $item->id }}">{{ $item->member_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <br>
                                        <div class="mb-3 mx-4">
                                            <label class="form-label" for="basic-default-company">no transaction</label>
                                            <input readonly name="no_trx" type="text" class="form-control" id="basic-default-company" placeholder="" value="{{ $transactionCode }}" />
                                        </div>
                                    </div> --}}

                                   
                                      <button type="button" class="btn btn-primary m-3 btn-add">Tambah
                                        <i class='bx bx-plus-circle'></i>
                                      </button>
                                    

                                    
                          
                           
                                  <table class="table">
                                      <div align="right" class="m-b">
                                         
                                      </div>
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Action</th>
                                              <th>Books Name</th>
                                              <th>Date of Loan</th>
                                              <th>Date of Return</th>
                                              <th>Description</th>
                                          </tr>
                                      </thead>
                                      <tbody class="table-border-bottom-0">
                                          <tr>
                                              <td>#</td>
                                              <td><button type='button' class='btn btn-danger remove-row'><i class='bx bx-trash me-1'></i>Delete</button></td>
                                              <td>
                                                  <select name='id_book[]' class="form-control">
                                                      <option value=''>Select books</option>
                                                      @foreach ($books as $book)
                                                      <option value='{{ $book->id }}'>{{ $book->books_name }}</option>
                                                      @endforeach
                                                  </select>
                                              </td>
                                              <td><input type='date' name='dateOfloan[]' class='form-control'></td>
                                              <td><input type='date' name='dateOfreturn[]' class='form-control'></td>
                                              <td><input type='text' name='descriptions[]' class='form-control'></td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <hr>

                                  <div align="right" class="col-12">
                                    <a href="{{ url()->previous() }}" class="btn btn-danger mb-4 mx-4">Back
                                      <i class='bx bx-arrow-back' ></i>
                                    
                                    </a>
                                    
                                    <button type="submit" class="btn btn-success mb-4 mx-4">Add
                                      <i class='bx bxs-save' ></i>
                                    </button>
                                  </div>
                      


                                </div>
                
                            </div>
                            
                             
                           
                        </form>
                    </div>
                </div>



                <p class="text-center">
                  <span>Sudah meminjam?</span>
                  <a href="{{ route('trx.returnabook') }}">
                    <span>Menuju pengembalian</span>
                  </a>
                </p>
              </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>

  @include('layout.inc.js')

  {{-- <script>
    $('.btn-add').click(function() {
      let tbody = $('tbody');
      let newTr = "<tr>";
      newTr += "<td>#</td>";
      newTr += "<td><button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modalToggle'><i class='bx bx-trash me-1'></i>delete</button></td>";
      newTr += "<td>";
      newTr += "<select name='id_book[]' id=''>";
      newTr += "<option value=''>Select books</option>";
      // newTr += "@foreach ($books as $book)";
      newTr += "<option value='{{ $book->id }}'>{{ $book->books_name }}</option>";
      // newTr += "@endforeach"";
      newTr += "</select>";
      newTr += "</td>";
      newTr += "<td><input type='date' name='dateOfloan[]' class='form-control'></td>";
      newTr += "<td><input type='date' name='dateOfreturn[]' class='form-control'></td>";
      newTr += "<td><input type='text' name='descriptions[]' class='form-control'></td>";
      newTr += "</tr>";
      tbody.append(newTr);
    });
  </script> --}}
  <script>
    document.querySelector('.btn-add').addEventListener('click', function() {
        let tbody = document.querySelector('tbody');
        let newTr = document.createElement('tr');
        newTr.innerHTML = `
            <td>#</td>
            <td><button type='button' class='btn btn-danger remove-row'><i class='bx bx-trash me-1'></i>Delete</button></td>
            <td>
                <select name='id_book[]' class='form-control'>
                    <option value=''>Select books</option>
                    @foreach ($books as $book)
                    <option value='{{ $book->id }}'>{{ $book->books_name }}</option>
                    @endforeach
                </select>
            </td>
            <td><input type='date' name='dateOfloan[]' class='form-control'></td>
            <td><input type='date' name='dateOfreturn[]' class='form-control'></td>
            <td><input type='text' name='descriptions[]' class='form-control'></td>
        `;
        tbody.appendChild(newTr);
    });

    document.querySelector('tbody').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-row')) {
            event.target.closest('tr').remove();
        }
    });
</script>

<script>
  $(document).ready(function() {
      $('#memberSearch').on('input', function() {
          var search = $(this).val();
          if (search.length > 2) {
              $.ajax({
                  url: '{{ route("searchMembers") }}',
                  method: 'GET',
                  data: { search: search },
                  success: function(response) {
                      $('#memberSelect').empty();
                      response.forEach(function(member) {
                          $('#memberSelect').append(new Option(member.member_name, member.id));
                      });
                  }
              });
          }
      });

      $('#memberSelect').on('change', function() {
          var selectedOption = $(this).find('option:selected').text();
          var selectedValue = $(this).val();
          $('#selectedMemberName').val(selectedOption);
          $('input[name="id_member"]').val(selectedValue);
      });
  });
</script>

  </body>
</html>
