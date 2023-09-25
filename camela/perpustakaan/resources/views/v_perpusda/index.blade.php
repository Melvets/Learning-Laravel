@extends('layouts.layout')

@section('container')
        
<!-- Page header -->
<div class="page-header d-print-none text-white">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <!-- Page pre-title -->
        <div class="page-pretitle">
          {{ $titlePerpus }}
        </div>
        <h2 class="page-title daftar">
          {{ $title }}
        </h2>
      </div>
      <!-- Page title actions -->
      <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
          <a href="/perpustakaan/create" class="btn btn-primary" >
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
                  <input type="text" class="form-control form-control-sm text-center" value="5" size="3" aria-label="Invoices count" disabled>
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
                  <th>Judul</th>
                  <th>Kode</th>
                  <th>Penulis</th>
                  <th>Kategori</th>
                  <th>Penerbit</th>
                  <th>Jumlah Halaman</th>
                  <th>Tahun Terbit</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                    $no = 1;    
                @endphp
                @foreach ($dataperpus as $data)
                <tr>
                  <td><span class="text-secondary">{{ $no++ }}</span></td>

                  <td>{{ $data->judul }}</td>
                  <td>{{ $data->kode }}</td>
                  <td>{{ $data->penulis }}</td>
                  <td>{{ $data->kategori }}</td>
                  <td>{{ $data->penerbit }}</td>
                  <td>{{ $data->jml_halaman }}</td>
                  <td>{{ $data->tahun_terbit }}</td>
                  <td>
                    <div class="d-flex">
                      <a href="/perpustakaan/{{ $data->id }}/edit" class="btn btn-default text-green btn-lg shadow rounded-2 p-2" title="update"><i class="fas fa-pen"></i></a>
                      <a href="/perpustakaan/{{ $data->id }}" class="btn btn-default text-yellow btn-lg shadow rounded-2 p-2" title="detail"><i class="fa-solid fa-circle-info" style="color: #ffd500;"></i></a>
                      <form action="/perpustakaan/{{ $data->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-default text-red btn-lg shadow rounded-2 p-2" onclick="return confirm('Apakah anda yakin?') "> <i class="fas fa-trash"></i> </button>
                      </form>
                      
                    </div>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          @if($count == 0)
          <div class="mt-3">
            <p class="text-secondary text-center">Tidak ada data yang dapat ditampilkan.</p>
          </div>
          @endif

          <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-secondary">Showing <span>5</span> of <span>{{ $count }}</span> entries</p>
            <ul class="pagination m-0 ms-auto">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                  <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                  prev
                </a>
              </li>
              <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">4</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">5</a></li>
              <li class="page-item disabled">
                <a class="page-link disabled" href="#">
                  next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                </a>
              </li>
            </ul>
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