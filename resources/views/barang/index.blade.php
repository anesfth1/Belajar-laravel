<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Book</title>
</head>
<body>
    @extends('layouts.master')
    @section('konten')
    <center>List Barang</center>
    <table border='1'>
       <thead>
           <tr>
               <th>id</th>
               <th>Kode</th>
               <th>Nama</th>
               <th>Harga</th>
               <th>Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach($barang as $data)
           <tr>
             <td>{{ $data->id }}</td>
             <td>{{ $data->kode }}</td>
             <td>{{ $data->nama }}</td>
             <td>{{ $data->harga }}</td>
             <td><a href="/barang2/{{ $data->id }}">Show</a></td>
           </tr>
           @endforeach

       </tbody>
    </table>
       @endsection
</body>
</html>
