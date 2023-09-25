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
  <div class="card-header">
    <h3 class="card-title">Edit Siswa</h3>
  </div>

  <form action="/siswa/{{ $id }}" method="POST">

    @csrf
    @method('PUT')

  <div class="p-5 pt-3 pb-3">
    <div class="modal-body">
    <div class="mb-3">

    <!-- Nama -->
    <label for="nama" class="form-label">Name</label>
    <input id="nama" type="text" class="form-control " placeholder="Your name" name="nama" required
    value="{{ $datasiswa->nama }}">

    </div>
  
    <div class="row">
    <div class="col-lg-9">
      <div class="mb-3">
      
      <!-- Kelas -->
      <label for="kelas" class="form-label">Kelas</label>
      <input id="kelas" type="text" class="form-control " placeholder="Your name" name="kelas" required
      value="{{ $datasiswa->kelas }}">

      </div>
    </div>

    <div class="col-lg-3">
      <div class="mb-3">
      
      <!-- presensi -->
      <label for="presensi" class="form-label">Presensi</label>
      <input id="presensi" type="text" class="form-control " placeholder="Your name" name="presensi" required
      value="{{ $datasiswa->presensi }}">
      
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
      <div class="mb-3">
      
      <!-- jenis_kelamin -->
      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
      <input id="jenis_kelamin" type="text" class="form-control " placeholder="Your name" name="jenis_kelamin" required
      value="{{ $datasiswa->jenis_kelamin }}">

      </div>
    </div>
    <div class="col-lg-6">
      <div class="mb-3">

      <!-- alamat -->
      <label for="alamat" class="form-label">Alamat</label>
      <input id="alamat" type="text" class="form-control " placeholder="Your name" name="alamat" required
      value="{{ $datasiswa->alamat }}">

      </div>
    </div>
    </div>

    <div class="modal-footer">

      <a href="/siswa" class="btn btn-link link-secondary text-decoration-none mx-3">
      Cancel
      </a>

      <button type="submit" name="submit" class="btn btn-primary">
      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
      <path d="M16 19h6"></path>
      <path d="M19 16v6"></path>
      <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
      </svg>
      Save
      </button>

    </div>
  </div>

  </form>

  </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection