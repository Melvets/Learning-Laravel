@extends('layouts.main')

@section('container')

    <h1 class="text-dark">List Kategori</h1>

    <div class="container">
        <div class="row">

            @foreach ( $dataKategori as $data )

            <div class="col-md-4">
                
                <a href="/post?kategori={{ $data->slug }}">
                    
                    <div class="card bg-dark text-white">
                        <div class="position-absolute px-5 py-1" style="background-color: rgba(0, 0, 0, 0.7)"> 
                            <h5>{{ $data->nama }}</h5>
                        </div>

                        <img src="https://source.unsplash.com/400x300?{{ $data->nama }}" class="card-img" alt="{{ $data->nama }}">
                        
                        {{-- 
                        <div class="card-img-overlay p-0">
                            <h5 class="card-title p-3" style="background-color: rgba(0,0,0,0.7)">{{ $data->nama }}</h5>
                        </div> --}}

                    </div>

                </a>
                
            </div>

            @endforeach

        </div>
    </div>

@endsection