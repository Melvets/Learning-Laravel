@extends('layouts.main')

@section('container')
    <div class="card p-3 mb-2">
        <article>
            <h2>{{ $post->title }}</h2>
            <p>By. Zakaria Adiwibowo in <a href="/kategori/{{ $post->Kategori_model->slug }}" class="text-decoration-none">{{ $post->Kategori_model->nama }}</a> </p>
            {!! $post->body !!}
        </article>
        <a href="/blog">Back</a>
    </div>

@endsection

