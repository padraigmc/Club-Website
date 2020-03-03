<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="author" content="Padraig McCarthy">
	<meta name="description" content="Check out this photo album!">
	<meta name="keywords" content="OPC,UL,climbing,outdoor,pursuits,club,university,limerick,bouldering,trad,society,gallery">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/ico">

	<title>Gallery</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="custom.css">

	<script>
		// variable used to highlight navbar link on current page
		// corresponding navbar item in the navbar.html must have id equal to value of pageID
		var pageID = "gallery";
	</script>

</head>

<body class="bg-light">	

	<!-- Navbar -->
	<?php include 'navbar.html'; ?>

	<!-- Page Content -->

	<div class="container-fluid bg-light">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<br>
				<h1>Photo Album</h1>
				<p>Insert title here...</p>
			</div>
			<div class="col-md-3 m-auto text-center">
				<a class="btn btn-dark rounded-pill mt-3" id="fullAlbumButton" href="" target="_blank">
					See the Full Album!
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 px-0">
				<!--
					Insert photo album here...
				-->
			</div>
		</div>
	</div>

	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<p class="">
					Insert description here...
				</p>
			</div>
			<div class="col-md-4 border">

			</div>
		</div>
	</div>

	<div class="bg-dark text-secondary">
		<p class="text-center m-0 copyright-footer"> © Copyright UL Outdoor Pursuits Club 2020</p>
	</div>


	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
