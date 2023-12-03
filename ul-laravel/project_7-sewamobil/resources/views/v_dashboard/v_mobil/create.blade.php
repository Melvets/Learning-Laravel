@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/mobil" class="text-secondary">/mobil</a>/create
        </div>
        <h2 class="page-title">
          Create New Car
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

                <form action="/dashboard/mobil" method="POST" class="card">

                    @csrf

                    <div class="card-header"><h3 class="card-title">Form Create Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Merk</label>
                                    <input type="text" name="merk" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Model</label>
                                    <input type="text" name="model" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Tahun Produksi</label>
                                    <input type="number" name="tahun_produksi" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Warna</label>
                                    <input type="text" name="warna" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-4">
                              <div class="mb-3">
                                  <label class="form-label required">Nomor Polisi</label>
                                  <input type="text" name="nomor_polisi" class="form-control" placeholder="Wajib diisi ..." required>
                              </div>
                          </div>

                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="/dashboard/mobil" class="btn btn-outline-danger mx-2">Back</a>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>    

@endsection