@extends('layouts.main')

@section('container')

    <h3 class="text-dark">Postingan dengan kategori: <span class="text-danger">{{ $kategori }}</span></h3>

    @foreach ($dataPosts as $data)
    <div class="card p-3 mb-2">
        <article>
            <h2> <a href="/blog/{{ $data->slug }}">{{ $data->title }}</a> </h2>
            <p>{{ $data->excerpt }}</p>
        </article>
    </div>
    @endforeach
@endsection