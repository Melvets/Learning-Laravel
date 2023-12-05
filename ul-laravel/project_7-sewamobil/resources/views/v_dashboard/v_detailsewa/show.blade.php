@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/detailsewa" class="text-secondary">/detailsewa</a>/show
        </div>
        <h2 class="page-title">
          {{ $title }}
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

                <div class="card">
                    <h3 class="card-header">Detail Sewa</h3>
    
                        <div class="card-body">
    
                            <div class="row row-cards">
    
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label class="form-label required">Nama Customer</label>
                                        <input class="form-control" type="text" disabled value="{{ $dataDetailSewa->customer->nama_depan }} {{ $dataDetailSewa->customer->nama_belakang }}">
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label class="form-label required">Mobil yang ingin disewa</label>
                                        <input class="form-control" type="text" disabled value="{{ $dataDetailSewa->mobil->merk }} {{ $dataDetailSewa->mobil->model }}">
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label required">Durasi Sewa ... Hari</label>
                                        <input class="form-control" type="text" disabled value="{{ $dataDetailSewa->durasi_sewa }} Hari"> 
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Sewa</label>
                                        <input class="form-control" type="text" disabled value="{{ $dataDetailSewa->tanggal_sewa }}">
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label required">Tanggal Selesai Sewa</label>
                                        <input class="form-control" type="text" disabled value="{{ $dataDetailSewa->tanggal_selesai }}">
                                    </div>
                                </div>
    
                                <div class="col-sm-4 col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label required">Harga</label>
                                        <input class="form-control" type="text" disabled value="@currency($dataDetailSewa->harga)">
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="card-footer text-end">
                            <a href="/dashboard/detailsewa" class="btn btn-outline-danger mx-2">Back</a>
                        </div>
    
                    </form>
                </div>
                
            </div>
        </div>
    </div>    

@endsection