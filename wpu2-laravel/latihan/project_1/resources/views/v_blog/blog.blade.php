@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>

    @foreach ($dataPosts as $data)
    <div class="card p-3 mb-2">
        <article>
            <h2> <a href="/blog/{{ $data['slug'] }}">{{ $data['title'] }}</a> </h2>
            <h5>By: {{ $data['author'] }}</h5>
            <p>{{ $data['body'] }}</p>
        </article>
    </div>
    @endforeach

@endsection