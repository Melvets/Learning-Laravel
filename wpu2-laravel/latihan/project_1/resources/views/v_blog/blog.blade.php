@extends('layouts.main')

@section('container')
    <h1>{!! $title !!}</h1>

    @if ($dataPosts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $dataPosts[0]->Kategori_model->nama }}" class="card-img-top" alt="{{ $dataPosts[0]->Kategori_model->nama }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $dataPosts[0]->slug }}" class="text-decoration-none text-dark">{{ $dataPosts[0]->title }}</a></h3>

                <p>
                    <small class="text-muted">
                        By. <a href="/author/{{ $dataPosts[0]->author->username }}" class="text-decoration-none">{{ $dataPosts[0]->author->name }}</a> in <a href="/kategori/{{ $dataPosts[0]->Kategori_model->slug }}" class="text-decoration-none">{{ $dataPosts[0]->Kategori_model->nama }}</a> {{ $dataPosts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $dataPosts[0]->excerpt }}</p>

                <a href="/blog/{{ $dataPosts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more ...</a>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found!</p>    
    @endif

    <div class="container">
        <div class="row">

            @foreach ($dataPosts->skip(1) as $data)
            <div class="col-md-4 mb-3">

                <div class="card">

                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"> <a href="/kategori/{{ $data->Kategori_model->slug }}" class="text-decoration-none text-white">{{ $data->kategori_model->nama }}</a></div>

                    <img src="https://source.unsplash.com/400x300?{{ $data->Kategori_model->nama }}" class="card-img-top" alt="{{ $data->Kategori_model->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/author/{{ $data->author->username }}" class="text-decoration-none">{{ $data->author->name }}</a> {{ $data->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $data->excerpt }}</p>
                        <a href="/blog/{{ $data->slug }}" class="text-decoration-none">Read more ...</a>
                    </div>
                  </div>

            </div>
            @endforeach

        </div>
    </div>

@endsection