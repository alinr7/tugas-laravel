@extends('layouts.main')
@section('container')

<div class="col-lg-6">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('image/'.$buku->foto)}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" align="center">{{$buku->judul}}</h5>
              <p class="card-text">Pengarang    : {{$buku->pengarang}}</p>
              <p class="card-text">Penerbit     : {{$buku->penerbit}}</p>
              <p class="card-text">Tahun Terbit : {{$buku->tahunterbit}}</p>
              <p class="card-text">Halaman      : {{$buku->halaman}}</p>
              <p class="card-text">Sinopsis     : 
                  {{$buku->sinopsis}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="input-group mb-4">
        <a href="/" class="btn btn-danger">Kembali</a>
      </div>
</div>
@endsection