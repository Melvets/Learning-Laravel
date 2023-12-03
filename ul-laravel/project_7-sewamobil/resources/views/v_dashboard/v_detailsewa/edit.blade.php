@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/detailsewa" class="text-secondary">/detailsewa</a>/edit
        </div>
        <h2 class="page-title">
          Edit Data Sewa
        </h2>
    </div>
</div>
</div>
</div>

<!-- Page body -->
<div class="page-body">
<div class="container-xl">
  <div class="row row-deck row-cards">

    <div class="col-lg-12">
        <div class="row row-cards">
            <div class="col-12">

                <form action="/dashboard/detailsewa/{{ $dataDetailSewa->id }}" method="POST" class="card">

                    @csrf
                    @method('put')

                    <div class="card-header"><h3 class="card-title">Form Edit Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Nama Customer</label>
                                    <select class="form-select" name="customer_id" id="mobil">
                                        @foreach ($dataCustomer as $data)
                                            @if (old('customer_id', $dataDetailSewa->customer_id) == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Mobil yang ingin disewa</label>
                                    <select class="form-select" name="mobil_id" id="mobil">
                                        @foreach ($dataMobil as $data)
                                            @if (old('mobil_id', $dataDetailSewa->mobil_id) == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->merk }} {{ $data->model }}, {{ $data->tahun_produksi }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->merk }} {{ $data->model }}, {{ $data->tahun_produksi }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Durasi Sewa ... Hari</label>
                                    <input type="number" name="durasi_sewa" class="form-control @error('durasi_sewa') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('durasi_sewa', $dataDetailSewa->durasi_sewa) }}">
                                    @error('durasi_sewa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Tanggal Sewa</label>
                                    <input type="date" name="tanggal_sewa" class="form-control @error('tanggal_sewa') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('tanggal_sewa', $dataDetailSewa->tanggal_sewa) }}">
                                    @error('tanggal_sewa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Tanggal Selesai Sewa</label>
                                    <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('tanggal_selesai', $dataDetailSewa->tanggal_selesai) }}">
                                    @error('tanggal_selesai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Harga</label>
                                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('harga', $dataDetailSewa->harga) }}">
                                    @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="/dashboard/detailsewa" class="btn btn-outline-danger mx-2">Back</a>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>    

@endsection