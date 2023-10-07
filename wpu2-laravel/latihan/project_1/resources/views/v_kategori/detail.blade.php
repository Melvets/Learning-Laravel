@extends('layouts.main')

@section('container')

    <h3 class="text-dark">Postingan dengan kategori: <span class="text-danger">{{ $kategori }}</span></h3>

    @foreach ($dataPosts as $data)
    <div class="card p-3 mb-2">
        <article>
            <h2> <a href="/blog/{{ $data->slug }}"  class="text-decoration-none">{{ $data->title }}</a> </h2>

            <p>By. <a href="" class="text-decoration-none">{{ $data->user->name }}</a> in <a href="/kategori/{{ $data->Kategori_model->slug }}" class="text-decoration-none">{{ $data->Kategori_model->nama }}</a> </p>

            <p>{{ $data->excerpt }}</p>

            <a href="/blog/{{ $data->slug }}" class="text-decoration-none">Read more ...</a>
        </article>
    </div>
    @endforeach
@endsection