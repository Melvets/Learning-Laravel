@extends('layouts.layout')

@section('container')
        
<!-- Page header -->
<div class="page-header d-print-none text-white">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
          Skanida E-Office
        </div>
        <h2 class="page-title daftar">
          {{ $title }}
        </h2>
      </div>
      <!-- Page title actions -->
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="/siswa/create" class="btn btn-primary" >
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus icon-member" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
            <path d="M16 19h6"></path>
            <path d="M19 16v6"></path>
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
            </svg>
            Create new data
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================================================================================================ -->  

<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards">

      <div class="col-12">
        <div class="card">

          <div class="card-body border-bottom py-3">
            <!-- <div class="d-flex mb-3">
              <a href="" class="btn btn-default btn-lg shadow rounded-2 p-1"><p class="text-secondary mb-0 fs-0">Excel</p></a>
            </div> -->
            <div class="d-flex">
              <div class="text-secondary">
                Show
                <div class="mx-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" value="" size="3" aria-label="Invoices count" disabled>
                </div>
                entries
              </div>
              <div class="ms-auto text-secondary">
                Search:
                <div class="ms-2 d-inline-block">

                  <form action="" method="post">

                  <input type="text" name="keyword" class="form-control form-control-sm" aria-label="Search invoice" autocomplete="off" id="keyword">

                  </form>
                
                </div>
              </div>
            </div>
          </div>

          <div class="table-responsive" id="container">
            <table class="table card-table table-vcenter text-nowrap datatable table-hover">
              <thead>
                <tr>
                  <th class="w-1">No.</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Presensi</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                    $no = 1;    
                @endphp
                @foreach ($datasiswa as $data)
                <tr>
                  <td><span class="text-secondary">{{ $no++ }}</span></td>

                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->kelas }}</td>
                  <td>{{ $data->presensi }}</td>
                  <td>{{ $data->jenis_kelamin }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>
                    <div class="d-flex">
                      <a href="/siswa/{{ $data->id }}/edit" class="btn btn-default text-green btn-lg shadow rounded-2 p-2" title="update"><i class="fas fa-pen"></i></a>
                      <a href="/siswa/{{ $data->id }}" class="btn btn-default text-yellow btn-lg shadow rounded-2 p-2" title="detail"><i class="fa-solid fa-circle-info" style="color: #ffd500;"></i></a>
                      <form action="/siswa/{{ $data->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-default text-red btn-lg shadow rounded-2 p-2" onclick=" confirm('Apakah anda yakin?') "> <i class="fas fa-trash"></i> </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

{{-- <div class="modal modal-blur fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Large modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="modal-footer">
        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
@endsection