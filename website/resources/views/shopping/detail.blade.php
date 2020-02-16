@extends('layout.master')

@section('isi')

<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center jomblo">Detail Barang</h1>
    </div>
  </div>
</div>
<br>
<hr>
<br>

<div class="container">
  <div class="row">
    <img src="http://localhost:8000/gambar/{{ $barang->gambar }}" alt="{{$barang->nama}}">
  </div>
  <div class="row">
    <h4>{{$barang->nama}}</h4>
    <br><br>
  </div>
  <div class="row">
    <p>Deskripsi : {{$barang->deskripsi}}</p>
  </div>
  <div class="row">
    <br>
    <p>Harga : IDR {{$barang->harga}}</p>
  </div>
  <div class="row">
    <h5>Data Penjual : </h5>
  </div>
  <div class="row">
    <div class="col-md-4 offset-sm-1">
      <ul>
        <li>Nama : {{$barang->user->nama}}</li>
        <li>Alamat : {{$barang->user->alamat}}</li>
        <li>Email : {{$barang->user->email}}</li>
        <li>Telepon : {{$barang->user->telepon}}</li>
      </ul>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-3 offset-9">
      <div id="tombol"><a href="#popup">Buy Now</a></div>

      <div id="popup">
        <div class="window">
          <a href="#" class="close-button" title="Close">X</a>
          <h2>Selamat, anda berhasil melakukan pembelian</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<hr>
<br>

@endsection