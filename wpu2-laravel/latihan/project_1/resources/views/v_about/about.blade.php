@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Alamat : {{ $alamat }}</p>
    <p>Hobi : {{ $hobi }}</p>
    <img src="/img/{{ $img }}" alt="{{ $nama }}">
@endsection