@extends('layouts.main')
@section('container')

<div class="col-lg-6">
  <div class="mb-3">
    <p class="h2" align="center">Data Buku</p>
    <form action="{{url("buku", $buku->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
    <label for="formGroupExampleInput" class="form-label" >Judul Buku</label>
    <input type="text" name="judul" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Judul Buku" value="{{$buku->judul}}">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Pengarang</label>
    <input type="text" name="pengarang" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Pengarang Buku" value="{{$buku->pengarang}}">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Penerbit Buku" value="{{$buku->penerbit}}">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Tahun Terbit</label>
    <input type="number" name="tahunterbit" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tahun Terbit Buku" value="{{$buku->tahunterbit}}">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Halaman</label>
    <input type="number" name="halaman" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Halaman Buku" value="{{$buku->halaman}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Masukkan Sinopsis</label>
    <textarea class="form-control" name="sinopsis" id="exampleFormControlTextarea1" rows="3">{{$buku->sinopsis}}</textarea>
  </div>
  <table>
    <tr>
      <td><div class="row">
        <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
        </div>
        <div class="col">
          <div class="input-group mb-4">
            <a href="/" class="btn btn-danger">Kembali</a>
          </div>
      </div> </form></td></tr>
  </table>
  </form>               
@endsection


