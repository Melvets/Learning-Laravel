@extends('v_dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif


  <div class="table-responsive col-lg-12">

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

          @foreach ($dataPosts as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->kategori_model->nama }}</td>
                <td>
                  <a href="/dashboard/posts/{{ $data->slug }}" class="badge bg-info m-0 p-0 pt-1 px-2"><i class="bi bi-eye"></i></a>
                  <a href="/dashboard/posts/{{ $data->slug }}/edit" class="badge bg-warning m-0 p-0 pt-1 px-2"><i class="bi bi-pencil-fill"></i></a>
                  <form action="/dashboard/posts/{{ $data->slug }}" method="POST" class="d-inline">

                    @method('delete')
                    @csrf

                    <button class="badge bg-danger m-0 p-0 pt-1 px-2 border-0" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')"><i class="bi bi-x-circle"></i></button>
                  </form>
                </td>
            </tr>
          @endforeach

        </tbody>
    </table>
  </div>
  
@endsection