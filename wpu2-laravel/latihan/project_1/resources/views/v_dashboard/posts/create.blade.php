@extends('v_dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-10">

        <form class="mb-5" method="POST" action="/dashboard/posts" enctype="multipart/form-data">

            @csrf

            {{-- Title --}}
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- Slug --}}
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
              @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- Kategori --}}
            <div class="mb-3">
              <label for="slug" class="form-label">Kategori</label>
              <select class="form-select" name="kategori_id">
                @foreach ($dataKategori as $data)
                  @if(old('kategori_id') == $data->id)
                    <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                  @else
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            {{-- Image --}}
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <img class="img-preview img-fluid mb-3 col-sm-3">
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
              @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror              
            </div>

            {{-- Body --}}
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              @error('body')
                <p class="text-danger">{{ $message }}</p>   
              @enderror
              <input id="body" type="hidden" name="body" value="{{ old('body') }}">
              <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>

        </form>

    </div>

    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });

      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
      })

      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }
      }
    </script>

@endsection