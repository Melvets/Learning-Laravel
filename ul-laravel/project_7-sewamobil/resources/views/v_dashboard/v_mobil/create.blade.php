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

                <form action="/dashboard/mobil" method="POST" class="card" enctype="multipart/form-data">

                    @csrf

                    <div class="card-header"><h3 class="card-title">Form Create Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Merk</label>
                                    <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" placeholder="Wajib diisi ..." required autofocus value="{{ old('merk') }}">
                                    @error('merk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror                                 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="form-label required">Model</label>
                                    <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('model') }}">
                                    @error('model')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror                                 
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Tahun Produksi</label>
                                    <input type="number" name="tahun_produksi" class="form-control @error('tahun_produksi') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('tahun_produksi') }}">
                                    @error('tahun_produksi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror                                     
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Warna</label>
                                    <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('warna') }}">
                                    @error('warna')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror                                 
                                </div>
                            </div>
                            <div class="col-md-4 col-md-4">
                                <div class="mb-3">
                                  <label class="form-label required">Nomor Polisi</label>
                                  <input type="text" name="nomor_polisi" class="form-control @error('nomor_polisi') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('nomor_polisi') }}">
                                    @error('nomor_polisi')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                    @enderror                                     
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label required">Gambar</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-4">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
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

    <script>
        function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');
  
          imgPreview.style.display = 'block';
  
          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);
  
          oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
          }
        }
    </script>

@endsection