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
           @foreach($book as $data)
           <tr>
             <td>{{ $data->id }}</td>
             <td>{{ $data->kode }}</td>
             <td>{{ $data->nama }}</td>
             <td>{{ $data->harga }}</td>
             <td><a href="/buku/{{ $data->id }}">Show</a></td>
           </tr>
           @endforeach
       </tbody>
    </table>
@endsection
