@extends('layouts.main')

@section('container')
    <div class="card p-3 mb-2">
        <article>
            <h2>{{ $dataPost->title }}</h2>

            <p>By. <a href="/author/{{ $dataPost->author->username }}" class="text-decoration-none">{{ $dataPost->author->name }}</a> in <a href="/kategori/{{ $dataPost->Kategori_model->slug }}" class="text-decoration-none">{{ $dataPost->Kategori_model->nama }}</a> </p>
            {!! $dataPost->body !!}
            
        </article>
        <a href="/blog">Back</a>
    </div>

@endsection

