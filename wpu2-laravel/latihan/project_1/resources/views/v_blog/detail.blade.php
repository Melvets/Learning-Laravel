@extends('layouts.main')

@section('container')
    <div class="card p-3 mb-2">
        <article>
            <h2>{{ $post->title }}</h2>
            {!! $post->body !!}
        </article>
        <a href="/blog">Back</a>
    </div>

@endsection

