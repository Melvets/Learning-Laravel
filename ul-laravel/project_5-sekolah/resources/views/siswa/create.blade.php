@extends('template.layout')

@section('container')

    
<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h2>Tambah Data {{ $title }}</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">Tambah Data {{ $title }}</div>
        <div class="card-body">
            <form action="/sekolah/siswa" method="POST">
                @csrf
                <div class="row lg-12 align-items-center">
                    <div class="col-9">
                        <div class="">
                            <label class="col-form-label" for="inputNama">Masukkan Nama Siswa</label>
                        </div>
                        <div class="">
                            <div class="col-12">
                                <input class="form-control" type="text" name="inputNama" id="inputNama" placeholder="Masukkan nama siswa">
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <label class="col-form-label" for="inputJenis_kelamin">Jenis Kelamin</label>
                        </div>
                        <div class="">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inputJenis_kelamin" value="L">
                                <span class="form-check-label">Laki-Laki</span>
                              </label>
              
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inputJenis_kelamin" value="P">
                                <span class="form-check-label">Perempuan</span>
                              </label>
                        </div>
                    </div>
                </div>
                <div class="row lg-12 align-items-center">
                    <div class="col-12">
                        <div class="">
                            <label class="col-form-label" for="inputId_kelas">Kelas</label>
                        </div>
                        <div class="">
                            <select class="form-select" name="inputId_kelas" id="inputId_kelas" aria-label="Default select example">
                                <option value="">Pilih kelas</option>
                                @foreach ($dataKelas as $data)
                                    <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                                @endforeach    
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <button class="btn btn-primary m-1" type="submit">Simpan</button>
                    <a href="/sekolah/siswa" class="btn m-1" type="submit">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection