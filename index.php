<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="author" content="Padraig McCarthy">
	<meta name="description" content="Outdoor Pursuits Club is one of UL's biggest and active clubs! We have everything from climbing and hiking to orienteering and caving!">
	<meta name="keywords" content="OPC,UL,climbing,outdoor,pursuits,club,university,limerick,bouldering,trad,society">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/ico">

	<title>UL OPC</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<!-- Csutom CSS -->
	<link rel="stylesheet" type="text/css" href="custom.css">

	<script>
		// variable used to highlight navbar link on current page
		// corresponding navbar item in the navbar.html must have id equal to value of pageID
		var pageID = "home";
	</script>

</head>

<body class="bg-light">	

	<!-- Navbar -->
	<?php include 'navbar.html'; ?>

	<!-- Page Content -->

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid m-0">
		<div class="container-fluid d-flex flex-column align-items-center">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="banner-text">
						Outdoor Pursuits Club
					</h1>
					<a class="btn btn-dark btn-md rounded-pill banner-text" href="https://ulwolves.ie/club/outdoor-pursuits" target="_blank">
						Go to ULWolves.ie
					</a>
				</div>
			</div>
		</div>
	</div>

	<br>

	<!-- Activity profiles -->
	<div class="container-fluid activities">

		<!-- Rock climbing profile -->
		<div class="row">
			<div class="col-md-6 order-lg-2 order-md-2">
				<img class="image-fluid mx-auto d-block fit-image" src="img/cullan_indoor_edit.jpg" alt="Rock Climbing">
			</div>
			<div class="col-md-6 text-center my-auto order-lg-1 order-md-1">
				<h1>ROCK CLIMBING</h1>
				<p>
					Join us at our campus bouldering wall for a climb every Monday, Tuesday and Thursday! We also host regular 
					trips to Suas Climbing Center and to some of Ireland's most beautiful outdoor climbing spots like the 
					Burren, Co. Clare!

					<?php echo $_SERVER['REQUEST_URI']; ?>
				</p>
			</div>
		</div>

		<!-- Hiking profile -->
		<div class="row">
			<div class="col-md-6">
				<img class="image-fluid mx-auto d-block fit-image" src="img/board_hike2_edit.jpg" alt="Hiking">
			</div>
			<div class="col-md-6 text-center my-auto">
				<h1>HIKING</h1>
				<p>
					One of the best ways to see the Irish landscape! Every semester we hike some of the most breathaking 
					places Ireland has to offer like Carauntoohil in Kerry and Galtimore in Limerick. 
				</p>
			</div>
		</div>

		<!-- Orienteering profile -->
		<div class="row">
			<div class="col-md-6 order-lg-2 order-md-2">
				<img class="image-fluid mx-auto d-block fit-image" src="img/activities/orienteering.jpg" alt="Orienteering">
			</div>
			<div class="col-md-6 text-center my-auto order-lg-1 order-md-1">
				<h1>ORIENTEERING</h1>
				<p>
					Enjoy getting lost? You have found the right club!
					Orienteering combines hiking and map reading as you trek to different checkpoints.				
				</p>
			</div>
		</div>

		<!-- Caving profile -->
		<div class="row">
			<div class="col-md-6 text-center">
				<img class="image-fluid mx-auto d-block fit-image" src="img/caving2_edit.jpg" alt="Caving">
			</div>
			<div class="col-md-6 text-center my-auto">
				<h1>CAVING</h1>
				<p>
					Experience Ireland's underground beauty and explore her ancient cave systems! Learn rope skills along 
					the way with single rope training (SRT).
				</p>
			</div>
		</div>
	</div>

	<?php
		include 'footer.html';
	?>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>