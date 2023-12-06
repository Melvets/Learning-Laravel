@extends('v_dashboard.layouts.main')

@section('container')
    
<div class="col-12">
  <div class="row row-cards">

    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                <i class="fa-solid fa-car fa-lg" style="color: #FFFFFF;"></i>
              </span>
            </div>
            <div class="col">
              <div class="text-secondary">
                Banyak Mobil
              </div>
              <div class="font-weight-medium">
                {{ $countMobil }} Mobil
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                <i class="fa-solid fa-user fa-lg" style="color: #FFFFFF;"></i>
              </span>
            </div>
            <div class="col">
              <div class="text-secondary">
                Banyak customer
              </div>
              <div class="font-weight-medium">
                {{ $countCustomer }} Customer
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                <i class="fa-solid fa-clipboard fa-lg" style="color: #FFFFFF;"></i>
              </span>
            </div>
            <div class="col">
              <div class="text-secondary">
                Banyak order
              </div>
              <div class="font-weight-medium">
                {{ $countDetailSewa }} Order
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection