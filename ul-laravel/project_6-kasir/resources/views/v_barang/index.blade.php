@extends('layouts.main')

@section('container')

    <a href="barang/create" class="btn btn-primary">Tambah Data</a>

    <div class="card mt-3">
        <div class="card-header">
        Tabel Data
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">barang</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td>{{ $data->kategori->nama_kategori }}</td>
                            <td>{{ $data->harga }}</td>
                            <td>
                                <a href="/kategori/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
                                <form action="/kategori/{{ $data->id }}" method="POST">
                                    
                                    @csrf
                                    @method('delete')

                                    <button type="submit" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Hapus</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
