@extends('layouts.app')

@section('content')
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style_register.css"/>
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
  @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
						<ul>
							<li class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ $error }}</li>
						</ul>
        @endforeach
  @endif
	@if (Session::has('success'))
			<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
	@endif
	</script>
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 hero-text">
					<form class="hero-subscribe-from" action="{{ route('admin_messageshow') }}" method="get">
						@csrf
						<button class="site-btn sb-gradients">Messages from Managers</button>
					</form>
					<form class="hero-subscribe-from" action="{{ route('doctors') }}" method="post">
						@csrf
						<button class="site-btn sb-gradients">Doctors List</button>
					</form>
					<form class="hero-subscribe-from" action="{{ route('admin_usershow') }}" method="get">
						@csrf
						<button class="site-btn sb-gradients">View Users</button>
					</form>
				</div>
				<div class="col-md-7">
          <div class="page-content">
		          <div class="form-v6-content">
			              <form class="form-detail" action="{{ route('admin_chat') }}" method="post">
											@csrf
				                 <h2>Message to Managers</h2>
                				<div class="form-row">
													<label class="input-text">To:</label>
													<select class="input-text" name="to">
														@foreach (\App\user::all()  as $user)
														<option value="{{$user->name}}">{{$user->name}}</option>
														@endforeach
													</select>
                				</div>
                				<div class="form-row">
                					<input type="text" name="body" class="input-text" placeholder="Content" required>
                				</div>
                				<div class="form-row-last">
													<button type="submit" class="site-btn sb-gradients">Send</button>
                				</div>
                			</form>
                		</div>
                	</div>
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

@endsection
