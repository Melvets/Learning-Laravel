<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>

    <link rel="stylesheet" href="css/style.css">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Rubik+Iso&display=swap" rel="stylesheet">

</head>
<body class="m-3">
    <h2 class="fw-bold">Data Pegawai</h2>

    <a href="/pegawai/create">+ Tambah Data Pegawai</a>

    <div class="tabel">
        <table class="table table-striped table-lg table-bordered table-hover"> 
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>

            @php
                $no = 1;    
            @endphp
            @foreach ($datapegawai as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td>{{ $data->alamat }}</td>
                <td><a href="/pegawai/{{ $data->id }}/edit">Edit</a> | <a href="#">Hapus</a></td>
            </tr>
            @endforeach

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>