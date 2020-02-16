	@extends('layout.master')

	@section('title', 'Login | Futsal$tore')

	@section('content')

	<!-- Login Form -->
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center mb-4" style="font-family: judul;">Login Administrator Futsal$tore</h1>
				<div class="row">
					<div class="col-md-6 mx-auto">

						<!-- form card login -->
						<div class="card rounded-0">
							<div class="card-header">
								<h5 class="mb-0">Login</h5>
							</div>
							<div class="card-body">
								<form class="form" role="form" action="/pengurus/login" id="formLogin" method="POST">

									@csrf

									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" class="form-control form-control-lg rounded-0" name="email" id="email">
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control form-control-lg rounded-0" id="password" name="password">
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
									<a href="/pengurus/register" class="btn btn-secondary btn-lg">Register</a>
									<button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
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