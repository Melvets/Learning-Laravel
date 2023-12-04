@extends('v_dashboard.layouts.main')

@section('container')
    
    <!-- Page pre-title -->
    <div class="page-pretitle">
      <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/mobil" class="text-secondary">/mobil</a>
      </div>
      <h2 class="page-title">
        Data Mobil
      </h2>

    </div>

    <!-- Page title actions -->
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
        <a href="/dashboard/mobil/create" class="btn btn-danger d-none d-sm-inline-block text-white">
          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
          Create New Data
        </a>
      </div>
    </div>

  </div>
</div>
</div>

<!-- Page body -->
<div class="page-body">
<div class="container-xl">
  <div class="row row-deck row-cards">

    {{-- Table --}}
    <div class="col-12">
      <div class="card">
        <div class="card-body border-bottom py-3">
          <div class="d-flex">
            <div class="text-secondary">
              Show
              <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
              </div>
              entries
            </div>
            <div class="ms-auto text-secondary">
              Search:
              <div class="ms-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Tahun Produksi</th>
                <th>Warna</th>
                <th>Nomor Polisi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($dataMobil as $data)
              
              <tr>
                  <td><span class="text-secondary">{{ $loop->iteration }}</span></td>
                  <td>{{ $data->merk }}</td>
                  <td>{{ $data->model }}</td>
                  <td>{{ $data->tahun_produksi }}</td>
                  <td>{{ $data->warna }}</td>
                  <td>{{ $data->nomor_polisi }}</td>
                  <td class="d-flex">
                    <a href="/dashboard/mobil/{{ $data->id }}/edit" class="btn btn-default text-green btn-md shadow rounded-2 p-2" title="update"><i class="fas fa-pen"></i></a>
                    <form action="/dashboard/mobil/{{ $data->id }}" method="POST">
                      
                      @method('delete')
                      @csrf
                      
                      <button class="btn btn-default text-red btn-md shadow rounded-2 p-2" onclick="return confirm('Apakah Anda yakin?')"> <i class="fas fa-trash"></i> </button>
                    </form>
                  </td>
              </tr>

            @endforeach

            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
          <ul class="pagination m-0 ms-auto">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                prev
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    {{-- End Table --}}

@endsection