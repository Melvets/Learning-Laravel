@extends('v_dashboard.layouts.main')

@section('container')
    
    {{-- <button type="button" class="btn btn-primary">Primary</button> --}}

    <!-- Page title actions -->
    <div class="container">
        <div class="align-item-right">
            <div class="">
                <a href="/dashboard/mobil/create" class="btn btn-primary d-none d-sm-inline-block">
                <div class=""></div>
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                Create New Data
                </a>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Mobil</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Tahun Produksi</th>
                        <th>Warna</th>
                        <th>Nomor Polisi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($dataMobil as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->merk }}</td>
                        <td>{{ $data->model }}</td>
                        <td>{{ $data->tahun_produksi }}</td>
                        <td>{{ $data->warna }}</td>
                        <td>{{ $data->nomor_polisi }}</td>
                        <td>
                            <a href="/dashboard/mobil/{{ $data->id }}/edit">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

@endsection