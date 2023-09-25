<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
</head>
<body>
    <h2>Detail Data</h2>

    <table>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>{{ $datapegawai->nama }}</td>
        </tr>
        <tr>
            <th>Jabatan</th>
            <td>:</td>
            <td>{{ $datapegawai->jabatan }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td>{{ $datapegawai->tgl_lahir }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>{{ $datapegawai->alamat }}</td>
        </tr>
    </table>

    <a href="/pegawai"><-- Kembali</a>
</body>
</html>