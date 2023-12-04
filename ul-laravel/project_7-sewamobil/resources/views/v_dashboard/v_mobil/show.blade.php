@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/" class="text-secondary">/dashboard</a><a href="/dashboard/mobil" class="text-secondary">/mobil</a>/show
        </div>
        <h2 class="page-title">
          {{ $title }}
        </h2>
    </div>
</div>
</div>
</div>

<!-- Page body -->
<div class="page-body">
<div class="container-xl">
  <div class="row row-deck row-cards">

    <div class="col-lg-12">
        <div class="row row-cards">
            <div class="col-12">

                <div class="card mb-3" style="max-width: 1240px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ asset('storage/' . $dataMobil->image) }}" width="1000" class="img-fluid rounded-start">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $dataMobil->merk }} {{ $dataMobil->model }}</h5>
                            <div class="border-start border-danger border-3 ms-3 mb-0">
                                <p class="card-text mb-2 ms-3">Merk : {{ $dataMobil->merk }} </p>
                                <p class="card-text mb-2 ms-3">Model : {{ $dataMobil->model }} </p>
                                <p class="card-text mb-2 ms-3">Tahun Produksi : {{ $dataMobil->tahun_produksi }} </p>
                                <p class="card-text mb-3 ms-3">Warna : {{ $dataMobil->warna }}</p>
                            </div> 

                            <div class="text-start">
                                <a href="/dashboard/mobil" class="btn text-danger mx-2 mb-0">Back</a>
                            </div>
                          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                          {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                        </div>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>    

@endsection