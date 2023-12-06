@php
  // function tanggal_ind($tanggal) {
  //   $pisah   = explode('-',$tanggal);
  //   $larik   = array($pisah[2],$pisah[1],$pisah[0]);
  //   $satukan = implode('-',$larik);
  //   return $satukan;
  // } 
@endphp

@extends('v_dashboard.layouts.main')

@section('container')
    
    <!-- Page pre-title -->
    <div class="page-pretitle">
      <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/detailsewa" class="text-secondary">/detailsewa</a>
      </div>
      <h2 class="page-title">
        Detail Sewa Mobil
      </h2>

    </div>

    <!-- Page title actions -->
    <div class="col-auto ms-auto d-print-none">
      <div class="btn-list">
        <a href="/dashboard/detailsewa/create" class="btn btn-danger d-none d-sm-inline-block text-white">
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
                <input type="text" class="form-control form-control-sm" value="{{ $jumlahDetailSewa }}" size="3" aria-label="Invoices count">
              </div>
              entries
            </div>

          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Nama</th>
                <th>Mobil</th>
                <th>Durasi Sewa</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Selesai</th>
                <th>Harga</th>
                <th>Action</th>
              </tr>
            </thead>

            @if($dataDetailSewa->count())

            <tbody>

            @foreach ($dataDetailSewa as $data)
              
              <tr>
                  <td><span class="text-secondary">{{ $loop->iteration }}</span></td>
                  <td>{{ $data->customer->nama_depan }} {{ $data->customer->nama_belakang }}</td>
                  <td>{{ $data->mobil->merk }} {{ $data->mobil->model }}, {{ $data->mobil->tahun_produksi }}</td>
                  <td>{{ $data->durasi_sewa }} Hari</td>
                  <td>{{ \Carbon\Carbon::parse($data->tanggal_sewa)->format('d-m-Y') }}</td>
                  <td>{{ \Carbon\Carbon::parse($data->tanggal_selesai)->format('d-m-Y') }}</td>
                  <td>@currency($data->harga)</td>
                  <td>
                    <div class="d-inline-flex">
                      <a href="/dashboard/detailsewa/{{ $data->id }}/edit" class="btn btn-default text-green btn-md shadow rounded-2 p-2" title="update"><i class="fas fa-pen"></i></a>
                      <a href="/dashboard/detailsewa/{{ $data->id }}" style="color: #e0ce00;" class="btn btn-default btn-md shadow rounded-2 p-2" title="update"><i class="fa-solid fa-eye"></i></a>
                      <form action="/dashboard/detailsewa/{{ $data->id }}" method="POST">
                        
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
                <p class="text-danger text-center fs-4 fw-bold m-4">No data found!</p>    
              </td>
            </tr>
            @endif

          </table>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-end">
          {{ $dataDetailSewa->links() }}
        </div>
      </div>
    </div>
    {{-- End Table --}}

@endsection