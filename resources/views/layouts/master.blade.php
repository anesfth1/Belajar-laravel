<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/home">HOME</a>
        <a href="/about">ABOUT</a>
        <a href="/contact">CONTACT</a>
        <a href="/buku">BUKU</a>
        <a href="/barang2">BARANG</a>
    </nav>

    {{-- Tempat Konten Dinamis --}}
        @yield('konten')
    {{-- Akhir tempat konten dinamis --}}

    <footer>SMK ASSALAAM</footer>
</body>
</html>
