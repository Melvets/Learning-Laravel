@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">

                <div class="card p-3 mb-2">
                    <article>
                        <h1>{{ $dataPost->title }}</h1>
            
                        <p>By. <a href="/blog?author={{ $dataPost->author->username }}" class="text-decoration-none">{{ $dataPost->author->name }}</a> in <a href="/blog?kategori={{ $dataPost->Kategori_model->slug }}" class="text-decoration-none">{{ $dataPost->Kategori_model->nama }}</a> </p>

                        @if ($dataPost->image)
                            <div style="max-height: 350px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $dataPost->image) }}" alt="{{ $dataPost->Kategori_model->nama }}" class="img-fluid">                            
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400?{{ $dataPost->Kategori_model->nama }}" alt="{{ $dataPost->Kategori_model->nama }}" class="img-fluid">
                        @endif
                        
                        <article class="my-3">
                            {!! $dataPost->body !!}
                        </article>
                        
                    </article>
                    <a href="/blog">Back</a>
                </div>

            </div>
        </div>
    </div>

@endsection

