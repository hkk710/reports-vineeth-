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
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 hero-text">
					<h2>Patient <span>Records</span> <br>Management System</h2>
					<form class="hero-subscribe-from">
            <button class="site-btn sb-gradients">Admin Login</button>
					</form>
				</div>
				<div class="col-md-7">
          <div class="page-content">
		          <div class="form-v6-content">
			              <form class="form-detail" action="#" method="post">
				                 <h2>Register Form</h2>
				                 <div class="form-row">
					                 <input type="text" name="doc_name" id="doc_name" class="input-text" placeholder="Doctor's Name" required>
				                  </div>
                				<div class="form-row">
                					<input type="text" name="reg_no" id="reg_no" class="input-text" placeholder="MCI Reg NO" required>
                				</div>
                				<div class="form-row">
                					<input type="text" name="address" id="address" class="input-text" placeholder="Address" required>
                				</div>
                				<div class="form-row">
                					<input type="text" name="mobile" id="mobile" class="input-text" placeholder="mobile no" required>
                				</div>
                        <div class="form-row">
                          <input type="text" name="hospital_no" id="hospital_no" class="input-text" placeholder="hospital/clinic no" required>
                        </div>
                        <div class="form-row">
                          <input type="text" name="facilities" id="facilities" class="input-text" placeholder="Facilities in hospital" required>
                        </div>
                				<div class="form-row-last">
                					<input type="submit" name="register" class="register" value="Register">
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
