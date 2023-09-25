@extends('layouts.layout')

@section('container')

<!-- Page header -->
<div class="page-header d-print-none text-white">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
		<div class="col">
			<!-- Page pre-title -->
			<div class="page-pretitle">
			{{ $titlePerpus }}
			</div>
			<h2 class="page-title daftar">
			{{ $title }}
			</h2>
		</div>
		</div>
	</div>
	</div>

<!-- ============================================================================================================================================ -->  

<!-- Page body -->
<div class="page-body">
	<div class="container-xl">
	<div class="row row-deck row-cards">

		<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">New Buku</h3>
			</div>

			<form action="/perpustakaan" method="POST">

			@csrf

			<div class="p-5 pt-3 pb-3">
				<div class="modal-body">
				<div class="row">	
					<div class="col-lg-10">	
						<div class="mb-3">
							<!-- Judul -->
							<label for="judul" class="form-label">Judul</label>
							<input id="judul" type="text" class="form-control " placeholder="Masukkan judul buku" name="judul" required>
						</div>
					</div>	

					<div class="col-lg-2">
						<div class="mb-3">
							<!-- Kode -->
							<label for="kode" class="form-label">Kode</label>
							<input id="kode" type="text" class="form-control " placeholder="Masukkan kode buku" name="kode" required>
						</div>
					</div>
				</div>
			
				<div class="row">
					<div class="col-lg-6">
						<div class="mb-3">				
							<!-- Penulis -->
							<label for="penulis" class="form-label">Penulis</label>
							<input id="penulis" type="text" class="form-control " placeholder="Masukkan penulis" name="penulis" required>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mb-3">
							<!-- Penerbit -->
							<label for="penerbit" class="form-label">Penerbit</label>
							<input id="penerbit" type="text" class="form-control " placeholder="Masukkan penerbit" name="penerbit" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="mb-3">
							<!-- Kategori -->
							<label for="kategori" class="form-label">Kategori</label>
							<input id="kategori" type="text" class="form-control" placeholder="Masukkan kategori buku" name="kategori" required>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mb-3">
							<!-- Jumlah Halamaan -->
							<label for="jml_halaman" class="form-label">Jumlah Halaman</label>
							<input id="jml_halaman" type="text" class="form-control" placeholder="Masukkan jml_halaman buku" name="jml_halaman" required>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mb-3">
							<!-- Tahun Terbit -->
							<label for="tahun_terbit" class="form-label">Tahun Terbit</label>
							<input id="tahun_terbit" type="text" class="form-control" placeholder="Masukkan tahun_terbit buku" name="tahun_terbit" required>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<a href="/perpustakaan" class="btn btn-link link-secondary text-decoration-none mx-3">
				Cancel
				</a>

				<button type="submit" name="submit" class="btn btn-primary">
				<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
				<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
				<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
				<path d="M16 19h6"></path>
				<path d="M19 16v6"></path>
				<path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
				</svg>
				Create new book
				</button>

				</div>
			</div>

			</form>

			</div>
		</div>
		</div>
	</div>
	</div>
</div>

@endsection