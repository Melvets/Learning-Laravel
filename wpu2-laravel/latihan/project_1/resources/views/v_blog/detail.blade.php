@extends('layouts.main')

@section('container')
    <div class="card p-3 mb-2">
        <article>
            <h2>{{ $post['title'] }}</h2>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
        <a href="/blog">Back</a>
    </div>

@endsection