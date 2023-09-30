<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevBlog | About</title>
</head>
<body>
    <h1>Halaman About</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Alamat : {{ $alamat }}</p>
    <p>Hobi : {{ $hobi }}</p>
    <img src="/img/{{ $img }}" alt="{{ $nama }}">
</body>
</html>