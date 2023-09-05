<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengedit Data</title>
</head>
<body>
    <h2>Mengedit Data</h2>

    <form action="/pegawai/{{ $id }}" method="POST">
    
        @csrf
        @method('PUT')

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $datapegawai->nama }}">
        <br>

        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan" value="{{ $datapegawai->jabatan }}">
        <br>

        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $datapegawai->tgl_lahir }}">
        <br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $datapegawai->alamat }}">
        <br>

        <button type="submit">Simpan</button>

    </form>
</body>
</html>