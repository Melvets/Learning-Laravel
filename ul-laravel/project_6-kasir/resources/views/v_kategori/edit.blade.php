@extends('layouts.main')

@section('container')

    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="/kategori/{{ $kategori->id }}" method="POST">

                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input name="kategori" type="text" class="form-control" id="kategori" value="{{ $kategori->nama_kategori }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection