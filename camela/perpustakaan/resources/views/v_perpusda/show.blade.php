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

            <div class="col-12 d-flex flex-column">
                <div class="card-body">
                  {{-- <h2 class="card-title fs-2">Profile Details</h2> --}}
                  <div class="row align-items-center">
                    <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(/template/static/avatars/default.jpg)"></span>
                    </div>
                    <div class="col-auto">
                        <p class="fs-1 mb-0 fw-bold">{{ $dataperpus->judul }}</p>
                        <p class="ps-1">{{ $dataperpus->penulis }} | {{ $dataperpus->penerbit }}</p>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Detail Buku</h3>
                    <div class="row g-3">
                        <div class="col-lg-3">
                            <div class="form-label">Judul</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->judul }}">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Kode</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->kode }}">
                        </div>
                        <div class="col-lg-3">
                            <div class="form-label">Penulis</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->penulis }}">
                        </div>
                        <div class="col-lg-3">
                            <div class="form-label">Penerbit</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->penerbit }}">
                        </div>                        
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-3">
                            <div class="form-label">Jumlah Halaman</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->jml_halaman }}">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Kategori</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->kategori }}">
                        </div>
                        <div class="col-lg-3">
                            <div class="form-label">Tahun Terbit</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $dataperpus->tahun_terbit }}">
                        </div>
                    </div>
                  </div>
                      
                  <div class="modal-footer">
                    <a href="/perpustakaan" class="btn btn-primary text-decoration-none mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up-double" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M13 14l-4 -4l4 -4"></path>
                            <path d="M8 14l-4 -4l4 -4"></path>
                            <path d="M9 10h7a4 4 0 1 1 0 8h-1"></path>
                         </svg> Kembali
                    </a>
                  </div>  
		</div>
		</div>
	</div>
	</div>
</div>

@endsection