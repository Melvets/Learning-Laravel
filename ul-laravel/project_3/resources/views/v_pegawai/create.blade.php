<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menginput Data ke Database</title>
</head>
<body>
    <h2>Menginput Data ke Database</h2>

    <form action="/pegawai" method="POST">
    
        @csrf

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="jabatan">Jabatan</label>
        <input type="text" name="jabatan" id="jabatan">
        <br>

        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir">
        <br>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>

        <button type="submit">Simpan</button>

    </form>
</body>
</html>