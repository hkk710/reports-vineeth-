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
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

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
    <a class="site-btn sb-gradients" href="{{ url('/') }}">
        Back to Home
    </a>
		<div class="container">
			<div class="row">
        <div class="col-md-12">
          <h1 style="text-align:center;color:#000;">Doctors</h1>
          <table class="table" id="table">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Doctor Name</th>
                <th class="text-center">MCI Reg no:</th>
                <th class="text-center">Address</th>
                <th class="text-center">Mobile no:</th>
                <th class="text-center">Hospital/Clinic no:</th>
                <th class="text-center">Facilities in Hospital</th>
            </tr>
          </thead>
          <tbody style="background-color:#fff;">
            @foreach ($patients as $patient)
              <tr>
                <td>{{$patient->patient_id}}</td>
                <td>{{$patient->doctor_name}}</td>
                <td>{{$patient->mci_reg_no}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->mobile_no}}</td>
                <td>{{$patient->hospital_no}}</td>
                <td>{{$patient->facilities}}</td>
              </tr>
           @endforeach
        </tbody>
      </table>
      {{ $patients->links() }}
      <script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
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
