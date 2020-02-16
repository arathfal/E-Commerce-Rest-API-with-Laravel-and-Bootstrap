<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Futsal Store</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand mr-sm-8" href="/futsalstore/home">
                <img src="/img/futbol-regular.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Futsal$tore
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown mr-sm-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Collection
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/futsalstore/jersey">Jersey</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/futsalstore/shoes">Shoes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/futsalstore/gloves">Gloves</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/futsalstore/sock">Sock</a>
                        </div>
                    </li>
                    <li>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" size="75px" type="search" placeholder="Search .." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <a href="/futsalstore/login"><img src="/img/login.png" alt="" width="50" height="20" style="margin-right:8px"></a>
                <a href="/futsalstore/cart"><img src="/img/shopping-basket-solid.svg" alt="" width="20" height="20" style="margin-left:8px"></a>
            </div>
        </div>
    </nav>

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
                <h3 class="text-center jomblo">Lastest Post</h3>
            </div>
        </div>
    </div>
    <br>

    <!-- Card product -->
    <div class="container">
        @php

        $i = 0;

        @endphp


        @foreach($barangs as $barang)

        @if($i == 3)

        @php

        break;

        @endphp

        @endif
        <div class="card-deck">
            <div class="card">

                <img src="http://localhost:8080/gambar/{{ $barang->gambar }}" class="card-img-top" alt="Specs Accelerator Exocet">
                <div class="card-body">
                    <h5 class="card-title jomblo">{{$barang->nama}}</h5>
                    <br>
                    <p>
                        {{$barang->deskripsi}}
                    </p>
                    <br>
                    @foreach($user as $u)
                    @if($u->id == $barang->user_id)
                    <p> {{$u->nama}}</p>
                    @endif
                    @endforeach
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted libre">IDR {{$barang->harga}}</small>
                        </div>
                        <div class="col-md-4 offset-md-4">
                            <a href="#">Buy Now</a>
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


    <br>
    <hr>
    <br>

    <footer class="sikil">
        <h5 class="text-center">About Us</h5><br>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <p>Address :</p>
                        <address>Jalan Soekarno-Hatta No.9, Lowokwaru, Malang</address>
                        <address>Jawa Timur, Indonesia</address>
                    </div>
                    <div class="col-md-4">
                        <p>Contact :</p>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="/img/phone.png" alt="" width="20" height="20">
                            </div>
                            <div class="col-sm-1">
                                <p>083832022793</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="https://www.instagram.com/atfal.aradea/"><img src="/img/instagram.svg" alt="" width="20" height="20"></a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://twitter.com/Aradea_09"><img src="/img/Twitter.png" alt="" width="20" height="20"></a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://www.facebook.com/Aradea7x"><img src="/img/facebook.svg" alt="" width="20" height="20"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Email :</p>
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="/img/email.svg" alt="" width="20" height="20">
                            </div>
                            <div class="col-sm-1">
                                <p>aradeaa9@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/style.js"></script>
</body>

</html>