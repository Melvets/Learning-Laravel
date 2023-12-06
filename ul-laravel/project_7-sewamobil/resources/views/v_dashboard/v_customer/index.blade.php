@extends('v_dashboard.layouts.main')

@section('container')
    
    <!-- Page pre-title -->
    <div class="page-pretitle">
      <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/customer" class="text-secondary">/customer</a>
      </div>
      <h2 class="page-title">
        Data Customer
      </h2>

    </div>

    <!-- Page title actions -->
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
        <a href="/dashboard/customer/create" class="btn btn-danger d-none d-sm-inline-block text-white">
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
                <input type="text" class="form-control form-control-sm" value="{{ $jumlahCustomer }}" size="3" aria-label="Invoices count">
              </div>
              entries
            </div>

            <form action="/dashboard/customer" method="GET" class="ms-auto d-flex">
              <div class="ms-auto text-secondary">
                  Search:
                  <div class="ms-2 d-inline-block">
                    <input name="search" type="text" class="form-control form-control-sm" aria-label="Search invoice" value="{{ request('search') }}">
                  </div>
              </div>
              <button type="button" class="btn btn-danger"
                      style="padding: .5rem 0; padding: 0 .5rem; font-size: .7em;">
                Search
              </button>
            </form>

          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>

            @if($dataCustomer->count())

            <tbody>

            @foreach ($dataCustomer as $data)
              
              <tr>
                  <td><span class="text-secondary">{{ $loop->iteration }}</span></td>
                  <td><img src="{{ asset('storage/' . $data->image) }}" width="50" class="img-thumbnail"></td>
                  <td>{{ $data->nama_depan }} {{ $data->nama_belakang }}</td>
                  <td>{{ $data->telepon }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>
                    <div class="d-inline-flex">
                      <a href="/dashboard/customer/{{ $data->id }}/edit" class="btn btn-default text-green btn-md shadow rounded-2 p-2" title="update"><i class="fas fa-pen"></i></a>
                      <a href="/dashboard/customer/{{ $data->id }}" style="color: #e0ce00;" class="btn btn-default btn-md shadow rounded-2 p-2" title="update"><i class="fa-solid fa-eye"></i></a>
                      <form action="/dashboard/customer/{{ $data->id }}" method="POST">
                        
                        @method('delete')
                        @csrf
                        
                        <button class="btn btn-default text-red btn-md shadow rounded-2 p-2" onclick="return confirm('Apakah Anda yakin?')"> <i class="fas fa-trash"></i> </button>
                      </form>
                    </div>
                  </td>
              </tr>

            @endforeach

            </tbody>

            @else
            <tr>
              <td colspan="8">
                <p class="text-danger text-center fs-4 fw-bold m-4">No customer found!</p>    
              </td>
            </tr>
            @endif

          </table>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-end">
          {{ $dataCustomer->links() }}
        </div>
      </div>
    </div>
    {{-- End Table --}}

@endsection