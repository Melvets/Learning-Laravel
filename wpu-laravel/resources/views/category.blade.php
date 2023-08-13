@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }} </h1>

    @foreach ($post as $p)
        <article>
            <h2><a href="/posts/{{ $p->slug }}">{{ $p->title }}</a></h2>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach
@endsection
    
