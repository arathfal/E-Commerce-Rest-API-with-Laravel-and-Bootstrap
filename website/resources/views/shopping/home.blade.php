@extends('layout.master')

@section('isi')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center jomblo">Futsal$tore</h1>
        </div>
    </div>
</div>
<br>
<hr>
<br>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slider_1.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slider_2.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slider_3.png" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<hr>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center jomblo">Populer Choice</h3>
        </div>
    </div>
</div>
<br>

<!-- Card product -->
<div class="container">
    <div class="row">

        @php

        $i = 0;

        @endphp

        @foreach($barangs as $barang)

        @if($i == 3)

        @php

        break;

        @endphp

        @endif
        <div class="col-md-4">
            <div class="card">
                <img src="http://localhost:8000/gambar/{{ $barang->gambar }}" class="card-img-top" alt="{{$barang->nama}}">
                <div class="card-body">
                    <h5 class="card-title jomblo">{{$barang->nama}}</h5>
                    <br>
                    <p>
                        @php

                        $desc = $barang->deskripsi;

                        echo substr($desc,0,50) . ".....";

                        @endphp
                    </p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted libre">IDR {{$barang->harga}}</small>
                        </div>
                        <div class="col-md-5 offset-md-3">
                            <a href="/futsalstore/detail/{{$barang->id}}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        @php

        $i++;

        @endphp

        @endforeach
    </div>
</div>
<br>
<hr>
<br>

@endsection