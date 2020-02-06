<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master')
@section('konten')
    <fieldset>
        <legend>Show Data</legend>
        Id : <b>{{ $barang->id }}</b><br>
        Kode : <b>{{ $barang->kode }}</b><br>
        nama : <b>{{ $barang->nama }}</b><br>
        harga : <b>{{ $barang->harga }}</b><br>
        foto : <img src="{{$barang->foto}}" alt=""><br>
    </fieldset>
    @endsection
</body>
</html>
