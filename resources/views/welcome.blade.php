<!DOCTYPE html>
<html lang="en">
<head>
	<title>Patient Reports</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
      @if (Route::has('login'))
      @auth
			@if(Auth::user()->admin == 1)
					<a class="site-btn" href="{{ url('/admin') }}">Admin</a>
			@else
					<a class="site-btn" href="{{ url('/home') }}">Home</a>
			@endif
			@else
      <!-- <a class="site-btn" href="{{ route('register') }}">Register</a> -->
      <a class="site-btn" href="{{ route('login') }}">Login</a></li>
      @endauth
      @endif
		</div>
	</header>
	<!-- Header section end -->
	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Doctor's <span>Record</span> <br>Management System</h2>
				</div>
				<div class="col-md-6">
					<img src="img/laptop2.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
