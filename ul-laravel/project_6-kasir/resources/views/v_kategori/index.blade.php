@extends('layouts.main')

@section('container')

    <a href="kategori/create" class="btn btn-primary">Tambah Data</a>

    <div class="card mt-3">
        <div class="card-header">
        Tabel Data
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_kategori }}</td>
                            <td class="d-flex">
                                <a href="/kategori/{{ $data->id }}/edit" class="btn text-green btn-lg shadow rounded-2" title="update"><i class="fas fa-pen text-success"></i></a>
                                <form action="/kategori/{{ $data->id }}" method="POST">
                                    
                                    @csrf
                                    @method('delete')

                                    <button type="submit" onclick="return confirm('Apakah Anda yakin?')" class="btn text-danger btn-lg shadow rounded-2" title="delete"><i class="fa-solid fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
