@extends('layouts.main')

@section('container')

    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="/barang/{{ $barang->id }}" method="POST">

                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}">
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="form-control">
                        @foreach ($kategori as $data)
                            <option @if($barang->kategori_id == $data->id) @selected(true) @endif value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input name="harga" type="number" class="form-control" id="harga" value="{{ $barang->harga }}">
                </div>

                <div class="mb-3">
                    <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                    <input name="jumlah_barang" type="number" class="form-control" id="jumlah_barang" value="{{ $barang->jumlah_barang }}">
                </div>

                {{-- <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input name="gambar" type="file" class="form-control" id="gambar">
                </div> --}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection