@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/customer" class="text-secondary">/customer</a>/edit
        </div>
        <h2 class="page-title">
          Edit Customer
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

                <form action="/dashboard/customer/{{ $dataCustomer->id }}" method="POST" class="card">

                    @csrf
                    @method('put')

                    <div class="card-header"><h3 class="card-title">Form Edit Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Nama Depan</label>
                                    <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('nama_depan', $dataCustomer->nama_depan) }}">
                                    @error('nama_depan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Nama Belakang</label>
                                    <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('nama_belakang', $dataCustomer->nama_belakang) }}">
                                    @error('nama_belakang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Telepon</label>
                                    <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ $dataCustomer->telepon }}">
                                    @error('telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('email', $dataCustomer->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Alamat</label>
                                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('alamat', $dataCustomer->alamat) }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="/dashboard/customer" class="btn btn-outline-danger mx-2">Back</a>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>    

@endsection