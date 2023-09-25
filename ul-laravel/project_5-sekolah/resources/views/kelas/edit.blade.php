@extends ('template.layout')

@section ('container')

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <h2>Edit Data Kelas</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">Edit Data Kelas</div>
        <div class="card-body">
            <form action="/sekolah/kelas/{{ $id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row lg-12 align-items-center">
                    <div class="col-6">
                        <div class="">
                            <label class="col-form-label" for="inputKelas">Masukkan Nama Kelas</label>
                        </div>
                        <div class="">
                            <div class="col-12">
                                <input class="form-control" type="text" name="inputKelas" id="inputKelas" placeholder="Masukkan nama kelas" value="{{ $dataKelas->kelas }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="">
                            <label class="col-form-label" for="inputId_jurusan">Jurusan</label>
                        </div>
                        <div class="">
                            <select class="form-select" name="inputId_jurusan" id="inputId_jurusan" aria-label="Default select example">
                                @foreach ($dataJurusan as $data)
                                    <option 
                                    @if ($dataKelas->id_jurusan == $data->id) selected @endif
                                    value="{{ $data->id }}">{{ $data->jurusan }}</option>
                                @endforeach    
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <button class="btn btn-success m-1" type="submit">Simpan</button>
                    <a href="/sekolah/kelas" class="btn m-1" type="submit">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
