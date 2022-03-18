@extends('layouts.main')
@section('container')

<div class="col-lg-9">
    <h1 align="center">Data Pencatatan Buku</h1>
    <h5 align="center">--M Ali Nur--</h5>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Detail Buku</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        @php
           $no = 1 
        @endphp
        @foreach ($buku as $row)
        <tr>
            <th>{{$no++}}</th>
            <td>{{$row->judul}}</td>
            <td>{{$row->pengarang}}</td>
            <td>{{$row->penerbit}}</td>
            <td><a href="buku/{{$row->id}}/show" class="btn btn-info">Detail</a></td>
            <td><div class="row">
                <div class="col">
                    <a href="buku/{{$row->id}}/edit" class="btn btn-warning">Edit</a>
                </div>
                <div class="col">
                    <form action='{{url("buku", $row->id)}}' method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger">Hapus</button>
                    </div> </form></td>
        </tr> 
        @endforeach
    </table>
        <a href="/buku/create" class="btn btn-secondary">Tambah</a>
</div>
@endsection