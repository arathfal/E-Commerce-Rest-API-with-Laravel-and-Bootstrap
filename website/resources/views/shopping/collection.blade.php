@extends('layout.master')

@section('isi')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center jomblo">{{$judul}}</h1>
        </div>
    </div>
</div>
<br>
<hr>
<br>


<div class="container">
    <div class="row">
        @foreach($kategori as $kate)
        <div class="col-md-4" style="margin-bottom:15px;">
            <div class="card">
                <img src="http://localhost:8000/gambar/{{$kate->gambar}}" class="card-img-top" alt="{{$kate->nama}}">
                <div class="card-body">
                    <h5 class="card-title jomblo">{{$kate->nama}}</h5>
                    <br>
                    <p>@php

                        $desc = $kate->deskripsi;

                        echo substr($desc,0,50) . ".....";

                        @endphp</p>
                    <br>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted libre">IDR {{$kate->harga}}</small>
                        </div>
                        <div class="col-md-5 offset-md-3">
                            <a href="/futsalstore/detail/{{$kate->id}}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>
<hr>
<br>


@endsection