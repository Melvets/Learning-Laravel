@extends ('template.layout')

@section ('container')

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h2>Edit Data Jurusan</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">Edit Data Jurusan</div>
        <div class="card-body">

            <form action="/sekolah/jurusan/{{ $id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row lg-12 align-items-center">
                    <div class="">
                        <label class="col-form-label" for="inputJurusan">Masukkan Jurusan</label>
                    </div>
                    <div class="row lg-12">
                        <div class="col-10">
                            <input class="form-control" type="text" name="inputJurusan" id="inputJurusan" placeholder="Masukkan nama jurusan" value="{{ $dataJurusan->jurusan }}">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="/sekolah/jurusan" class="btn" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection