@extends('layout.template')

@section('title', 'Dashboard')
@section('isiAdmin')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Overview</li>
</ol>

<div id="page-content-container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2>Selamat Datang {{$user}}</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
			</div>
		</div>
	</div>
</div>


@endsection