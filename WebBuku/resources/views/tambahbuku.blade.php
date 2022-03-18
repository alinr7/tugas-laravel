@extends('layouts.main')
@section('container')

<div class="col-lg-6">
  <div class="mb-3">
    <p class="h2" align="center">Data Buku</p>
    <form action="{{url("buku")}}" method="post" enctype="multipart/form-data">
      @csrf
    <label for="formGroupExampleInput" class="form-label">Judul Buku</label>
    <input type="text" name="judul" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Judul Buku">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Pengarang</label>
    <input type="text" name="pengarang" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Pengarang Buku">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Penerbit Buku">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Tahun Terbit</label>
    <input type="number" name="tahunterbit" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tahun Terbit Buku">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Halaman</label>
    <input type="number" name="halaman" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Halaman Buku">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Masukkan Sinopsis</label>
    <textarea class="form-control" name="sinopsis" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Masukkan Foto</label>
    <input type="file" name="foto" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Foto">
  </div>
      <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
      </div>
      <div class="input-group mb-4">
        <a href="/" class="btn btn-danger">Kembali</a>
      </div>
  </form>               
@endsection