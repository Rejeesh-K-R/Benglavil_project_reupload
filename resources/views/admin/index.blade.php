<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Home</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('assets/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/demo.css') }}">
	<link rel="icon" type="image" href="assets/img/img.jpeg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	

</head>
<body>
<body>
@extends('layouts.adminindexapp')
@section('content')
	<div class="main-panel">
		<div class="content">
			<div class="container-fluid">
				<h4 class="page-title">Dashboard</h4>
				<div class="row">
					<!-- Card 1 -->
					<div class="col-md-3">
						<div class="card card-stats card-warning">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="la la-users"></i>
										</div>
									</div>
									<div class="col-7 d-flex align-items-center">
										<a href="admin/about">
											<div class="numbers">
												<p class="card-category">About</p>
												@if($about->discover)
												<h4 class="card-title">1</h4>
												@endif
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card 2 -->
					<div class="col-md-3">
						<div class="card card-stats card-success">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="la la-bar-chart"></i>
										</div>
									</div>
									<div class="col-7 d-flex align-items-center">
										<a href="admin/services">
											<div class="numbers">
												<p class="card-category">Services</p>
												<h4 class="card-title">{{$services->count()}}</h4>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card 3 -->
					<div class="col-md-3">
						<div class="card card-stats card-danger">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="la la-newspaper-o"></i>
										</div>
									</div>
									<div class="col-7 d-flex align-items-center">
										<a href="admin/contact">
											<div class="numbers">
												<p class="card-category">Contacted</p>
												<h4 class="card-title">{{$contacts->count()}}</h4>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card 4 -->
					<div class="col-md-3">
						<div class="card card-stats card-primary">
							<div class="card-body">
								<div class="row">
									<div class="col-5">
										<div class="icon-big text-center">
											<i class="la la-check-circle"></i>
										</div>
									</div>
									<div class="col-7 d-flex align-items-center">
										<a href="admin/testimonials">
											<div class="numbers">
												<p class="card-category">Testimonials</p>
												<h4 class="card-title">{{$testimonials->count()}}</h4>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
<div style="height:300px;">
</div>

@endsection

</body>

<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>

</html>



