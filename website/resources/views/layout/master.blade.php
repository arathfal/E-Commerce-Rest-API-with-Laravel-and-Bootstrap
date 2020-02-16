<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shorcut icon" href="/img/football.ico">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/style.css">

	<title>Futsal Store</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand mr-sm-8" href="/futsalstore">
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
							<a class="dropdown-item" href="/futsalstore/Jersey">Jersey</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/futsalstore/Sepatu">Shoes</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/futsalstore/Gloves">Gloves</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/futsalstore/Kaos Kaki">Sock</a>
						</div>
					</li>
					<li>
						<form class="form-inline">
							<input class="form-control mr-sm-2" size="75px" type="search" placeholder="Search .." aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('isi')

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
								<p>085396775814</p>
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
							<div class="col-sm-2">
								<p>araara19@gmail.com</p>
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