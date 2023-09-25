@extends('layouts.layout')

@section('container')
<!-- Page header -->
<div class="page-header d-print-none text-white">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
		<div class="col">
			<!-- Page pre-title -->
			<div class="page-pretitle">
			Skanida E-Office
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
                        <p class="fs-1 mb-0 fw-bold">{{ $datasiswa->nama }}</p>
                        <p class="ps-1">{{ $datasiswa->kelas }}</p>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Detail Data Siswa</h3>
                    <div class="row g-3">
                        <div class="col-lg-3">
                            <div class="form-label">Nama</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $datasiswa->nama }}">
                        </div>
                        <div class="col-md">
                            <div class="form-label">Kelas</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $datasiswa->kelas }}">
                        </div>
                        <div class="col-lg-3">
                            <div class="form-label">Presensi</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $datasiswa->presensi }}">
                        </div>
                        <div class="col-lg-3">
                            <div class="form-label">Jenis Kelamin</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $datasiswa->jenis_kelamin }}">
                        </div>
                    </div>
                    <div class="row g-3 mt-1">
                        <div class="col-lg-12">
                            <div class="form-label">Alamat</div>
                            <input disabled type="text" class="form-control" 
                            value="{{ $datasiswa->alamat }}">
                        </div>
                    </div>
                  </div>
                      
                  <div class="modal-footer">
                    <a href="/siswa" class="btn btn-primary text-decoration-none mx-3">
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