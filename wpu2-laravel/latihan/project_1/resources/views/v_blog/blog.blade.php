@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-3">{!! $title !!}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">

            <form action="/blog" method="GET">

                @if ( request('kategori') )
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif

                @if ( request('author') )
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="">Search</button>
                </div>

            </form>

        </div>
    </div>

    @if ($dataPosts->count())
        <div class="card mb-3">

            {{-- Big Image --}}
            @if ($dataPosts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $dataPosts[0]->image) }}" alt="{{ $dataPosts[0]->Kategori_model->nama }}" class="card-img-top">                            
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $dataPosts[0]->Kategori_model->nama }}" class="card-img-top" alt="{{ $dataPosts[0]->Kategori_model->nama }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $dataPosts[0]->slug }}" class="text-decoration-none text-dark">{{ $dataPosts[0]->title }}</a></h3>

                <p>
                    <small class="text-muted">
                        By. <a href="/blog?author={{ $dataPosts[0]->author->username }}" class="text-decoration-none">{{ $dataPosts[0]->author->name }}</a> in <a href="/blog?kategori={{ $dataPosts[0]->Kategori_model->slug }}" class="text-decoration-none">{{ $dataPosts[0]->Kategori_model->nama }}</a> {{ $dataPosts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $dataPosts[0]->excerpt }}</p>

                <a href="/blog/{{ $dataPosts[0]->slug }}" class="text-decoration-none btn btn-danger">Read more ...</a>

            </div>
        </div>

    <div class="container">
        <div class="row">

            @foreach ($dataPosts->skip(1) as $data)
            <div class="col-md-4 mb-3">

                <div class="card">

                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"> <a href="/blog?kategori={{ $data->Kategori_model->slug }}" class="text-decoration-none text-white">{{ $data->kategori_model->nama }}</a></div>

                    {{-- Mini Image --}}
                    @if ($data->image)
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->Kategori_model->nama }}" class="img-fluid">                            
                    @else
                        <img src="https://source.unsplash.com/400x300?{{ $data->Kategori_model->nama }}" class="card-img-top" alt="{{ $data->Kategori_model->nama }}">
                    @endif                    

                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/blog?author={{ $data->author->username }}" class="text-decoration-none">{{ $data->author->name }}</a> {{ $data->created_at->diffForHumans() }}
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

    @else
        <p class="text-center fs-4">No post found!</p>    
    @endif

    <div class="d-flex justify-content-end">
        {{ $dataPosts->links() }}
    </div>

@endsection