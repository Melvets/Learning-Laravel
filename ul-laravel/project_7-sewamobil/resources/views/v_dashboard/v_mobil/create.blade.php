@extends('v_dashboard.layouts.main')

@section('container')

    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Create Data Mobil</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form action="/dashboard/mobil" method="POST">

                    @csrf

                    <div class="mb-3">
                      <label for="merk" class="form-label">Merk</label>
                      <input type="text" name="merk" class="form-control" id="merk">
                    </div>
                    <div class="mb-3">
                      <label for="model" class="form-label">Model</label>
                      <input type="text" name="model" class="form-control" id="model">
                    </div>
                    <div class="mb-3">
                      <label for="tahun_produksi" class="form-label">Tahun Produksi</label>
                      <input type="text" name="tahun_produksi" class="form-control" id="tahun_produksi">
                    </div>
                    <div class="mb-3">
                      <label for="warna" class="form-label">Warna</label>
                      <input type="text" name="warna" class="form-control" id="warna">
                    </div>
                    <div class="mb-3">
                      <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                      <input type="text" name="nomor_polisi" class="form-control" id="nomor_polisi">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection