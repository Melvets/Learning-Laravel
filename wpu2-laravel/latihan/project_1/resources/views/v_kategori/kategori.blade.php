@extends('layouts.main')

@section('container')

    <h1 class="text-dark">List Kategori</h1>

    @foreach ($dataKategori as $data)
    <div class="card pt-1 ps-1 m-2">
        <ul class="list-group">
            <li>
                <h5> <a class="text-decoration-none" href="/kategori/{{ $data->slug }}">{{ $data->nama }}</h5> </p>
            </li>
        </ul>
    </div>
    @endforeach
@endsection