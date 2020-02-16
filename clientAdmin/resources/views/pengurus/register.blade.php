@extends('layout.master')

@section('title', 'Register | Futsa$store')

@section('content')



<!-- Register Form -->
<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center mb-4" style="font-family: judul;">Register Admin Futsalstore</h1>
			<div class="row">
				<div class="col-md-6 mx-auto">

					<!-- form card login -->
					<div class="card rounded-0">
						<div class="card-header">
							<h5 class="mb-0">Register</h5>
						</div>
						<div class="card-body">
							<form class="form" role="form" action="/pengurus/register/simpan" id="formLogin" method="POST">

								@csrf

								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="nama" id="nama" required="">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" required="">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" required="">
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<textarea name="alamat" class="form-control form-control-lg rounded-0" id="alamat" required=""></textarea>
								</div>
								<div class="form-group">
									<label for="telepon">Telepon</label>
									<input type="text" class="form-control form-control-lg rounded-0" name="telepon" id="telepon" required="">
								</div>

								@if($message != "")
								<div class="alert alert-danger" role="alert">
									{{ $message }}
								</div>
								@endif

								<div>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
									</label>
								</div>
								Sudah punya akun? Login <a href="/pengurus">Disini</a>
								<button type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin">Register</button>
							</form>
						</div>
						<!--/card-block-->
					</div>
					<!-- /form card login -->

				</div>


			</div>
			<!--/row-->

		</div>
		<!--/col-->
	</div>
	<!--/row-->
</div>
<!--/container-->


@endsection