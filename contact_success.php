<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="author" content="Padraig McCarthy">
	<meta name="description" content="Want to get in touch? We won't bite!">
	<meta name="keywords" content="OPC,UL,climbing,outdoor,pursuits,club,university,limerick,bouldering,trad,society,contact">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/ico">

	<title>Contact Us</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Csutom CSS -->
	<link rel="stylesheet" type="text/css" href="custom.css">

</head>

<body class="bg-light">	

	<?php

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		// var declaration
		$nameErr = $emailErr = $messageErr = $verifyErr = "";
		$name = $email = $message = $verify = "";
		$num1 = $num2 = $res = NULL;
		$formComplete = TRUE;

		// set $num1 and $num2 to random int
		$num1 = random_int(0,20);
		$num2 = random_int(0,20);

		// set $res to the sum of $num1 and $num2
		$res = $num1 + $num2;

		// test if the submit button was clicked
		if (isset($_POST["submit"])) {
			
			// verify the 'name' field
			$name = test_input($_POST["name"]);

			// check if name only contains letters and whitespace
			if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z '-]*$/",$name)) {
				$nameErr = "Please enter your name.";
				$formComplete = FALSE;
			}

			// verify the 'email' field
			$email = test_input($_POST["email"]);

			// check if e-mail address is well-formed
			if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email";
				$formComplete = FALSE;
			}

			// verify the 'message' field
			$message = test_input($_POST["message"]);

			// check if message address is well-formed
			if (empty($message)) {
				$messageErr = "Please enter a message.";
				$formComplete = FALSE;
			}

			// verify the 'prove you're not a bot' field
			$verify = test_input($_POST["verify"]);

			// check if only numbers inputted (min 1 number, max 2 numbers)
			if (empty($_POST["verify"]) || !preg_match("/^[0-9]{1,2}$/",$verify) || $verify != $_POST["lastRes"]) {
				$verifyErr = "Please try again.";
				$formComplete = FALSE;
			}
			
			if ($formComplete == TRUE) {
				$to = "opc@skynet.ie";
				$subject = "Contact form ulopc.ie";
				$headers = "From: opc@skynet.ie" . "\r\n";
				
				$body = "Name: $name" .
						"Email: $email" .
						"Message: $message";
				
				mail($to, $subject, $body, $headers);

				header("Location: contact_success.php");
			}		

			
		}
	?>

<!-- Navbar -->
	<div class="container-fluid p-0" id="navContainer">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<!-- Badge -->
			<a class="navbar-brand" href="index.php">OPC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<!-- Home -->
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<!-- About -->
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<!-- Gallery -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Gallery
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  	<a class="dropdown-item" href="gallery_letterfrack_2019.php">Letterfrack 2019</a>
						 	<a class="dropdown-item" href="gallery_brandon_xmas_2019.php">Xmas in Brandon 2019</a>
						</div>
					</li>
					<!-- Forum -->
					<li class="nav-item">
						<a class="nav-link" href="https://www.tapatalk.com/groups/ulopc/" target="_blank">Forum</a>
					</li>	
					<!-- Contact -->
					<li class="nav-item active">
						<a class="nav-link" href="#">Contact
						<span class="sr-only">(current)</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>		
	</div>

	<!-- Page Content -->
	
	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid m-0">
		<div class="container-fluid p-0 d-flex align-items-center flex-column">
			<div class="row">
				<div class="col-md-12 text-center mb-10">
					<h1 class="banner-text pb-30">Contact Us!</h1>
					<a class="btn btn-dark btn-md rounded-pill banner-text m-0" href="https://ulwolves.ie/club/outdoor-pursuits" target="_blank">
						Go to ULWolves.ie
					</a>
				</div>
			</div>
		</div>
	</div>

    <div class="container-fluid bg-light pt-3" id="form">	
		<div class="row">
			<div class="col-md-8 px-0 my-auto text-center">
				<h1>Thanks for getting in contact!</h1>
				<p>
					One of our committee members will be in touch with you!
				</p>
			</div>
			<div class="col-md-4 px-0">
				<div class="container-fluid h-100 d-flex flex-column">
					<div class="row">
						<div class="col-md-12">

							<p class="mb-0">Email</p>
							<p class="font-small">Lash us an an electronic mail on <span class="text-primary">opc@gmail.com</span></p>
					
							<p class="mb-0">UL Students Union</p>
							<p class="mb-0 font-small">Call into the students union and ask about us!</p>
							<p class="font-small">SU, The Courtyard, University of Limerick</p>
						</div>
					</div>
				
					<div class="row flex-grow-1">
						<div class="col-md-12">
							<div style="height: 100%; width: 100%;">
								<iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=UL%20SU%2C%20MCFH%2B7V%20Sreelane%2C%20County%20Limerick+(UL%20Student's%20Union)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
									frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
								</iframe>
							</div>
						</div>
					</div>
				</div>
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