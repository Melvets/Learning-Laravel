@extends('v_dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-10">

                <div class="p-3 my-2">
                    <article>
                        <h1>{{ $dataPost->title }}</h1>
            
                        <p>By. <a href="/blog?author={{ $dataPost->author->username }}" class="text-decoration-none">{{ $dataPost->author->name }}</a> in <a href="/blog?kategori={{ $dataPost->Kategori_model->slug }}" class="text-decoration-none">{{ $dataPost->Kategori_model->nama }}</a> </p>

                        <a href="/dashboard/posts" class="btn btn-success my-3"><i class="bi bi-chevron-double-left me-2"></i>Back to all</a>
                        <a href="" class="btn btn-warning my-3"><i class="bi bi-pencil-fill me-2"></i>Edit</a>
                        <a href="" class="btn btn-danger my-3"><i class="bi bi-x-circle me-2"></i>Delete</a>

                        <img src="https://source.unsplash.com/1200x400?{{ $dataPost->Kategori_model->nama }}" alt="{{ $dataPost->Kategori_model->nama }}" class="img-fluid">

                        <article class="my-3">
                            {!! $dataPost->body !!}
                        </article>
                        
                    </article>
                </div>

            </div>
        </div>
    </div>
  
@endsection