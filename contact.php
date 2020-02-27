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

				//header("Location: test.html");
			}		
		}

	?>

	<!-- Navbar -->
	<div class="container-fluid p-0" id="navContainer">	
	    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html">OPC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Gallery
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="gallery_letterfrack_2019.html">Letterfrack 2019</a>
							<a class="dropdown-item" href="gallery_brandon_xmas_2019.html">Xmas in Brandon 2019</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.tapatalk.com/groups/ulopc/" target="_blank">Forum</a>
					</li>
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
			<div class="col-md-8 px-0">
				<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "#form";?>" method="post">
					<div class="form-group">
						<label class="control-label col-sm-4" for="email">Full Name:</label>
						<div class="col-sm-10 col-md-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" maxlength="75" tabindex="1">
							<p class="p-0 m-0 text-danger"><?php echo $nameErr; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="pwd">Email:</label>
						<div class="col-sm-10 col-md-12">          
							<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" maxlength="50" tabindex="2">
							<p class="p-0 m-0 text-danger"><?php echo $emailErr; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="pwd">Your Message:</label>
						<div class="col-sm-10 col-md-12">          
							<textarea class="form-control" name="message" id="message" placeholder="Your Message" cols="30" rows="6" maxlength="1000" tabindex="3"><?php echo $message; ?></textarea>
							<p class="p-0 m-0 text-danger"><?php echo $messageErr; ?></p>
						</div>
					</div>
					<div class="form-group d-flex flex-row">   
						<div class="col-sm-3 col-md-3 d-flex flex-column justify-content-center order-md-2 order-lg-2">
							<div class="d-flex flex-row">
								<h5><small><?php echo $num1 . " + " . $num2 . " = "; ?></small></h5>
								<input type="text" class="mx-2" name="verify" id="verify" size="1" tabindex="4">
								<input type="hidden" name="lastRes" value="<?php echo $res ?>">
							</div>
							<div>
								<p class="p-0 m-0 text-danger"><?php echo $verifyErr; ?></p>
							</div>
						</div>     
						<div class="col-sm-9 col-md-9 order-md-1 order-lg-1">
							<button type="submit" class="btn btn-dark btn-block" name="submit" id="submit" tabindex="5">Submit</button>
						</div>
					</div>
				</form>
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

	<!-- Footer -->
	<br>
	<hr class="my-0 bg-secondary">

	<div class="container-fluid bg-light pb-4">
		<div class="row">
			<!-- google maps iframe -->
			<div class="col-md-7 text-center">
				<p class="mt-3 mb-0">Visit our climbing wall!</p>
				<div class="row">
					<div class="col-md-12">
						<iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=80%&amp;hl=en&amp;q=UL%20Outdoor%20Pursuits%20Club%20University%20of%20Limerick%2C%20Castletroy%2C%20Co.%20Limerick%2C%20Ireland+(UL%20Outdoor%20Pursuits%20Climbing%20Wall)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
							frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>
					</div>
				</div>
			</div>

			<div class="col-md-3 text-center">

				<!-- Useful links -->
				<p class="mt-3 mb-0">Useful Links</p>
				<ul class="list-group footerLinks">
					<li class="list-item">
						<a href="https://www.outsideonline.com/2062326/beginners-guide-rock-climbing#close" target="_blank">Climbing for Beginners</a>
					</li>
					<li class="list-item">
						<a href="https://www.redbull.com/ie-en/the-most-awe-inspiring-hiking-trails-in-ireland" target="_blank">Hiking in Ireland</a>
					</li>
					<li class="list-item">
						<a href="https://www.orienteering.ie/" target="_blank">Orienteering in Ireland</a>
					</li>
					<li class="list-item">
						<a href="https://www.caving.ie/" target="_blank">Caving in Ireland</a>
					</li>
					<li class="list-item">
						<a href="https://www.epictv.com/" target="_blank">EpicTV</a>
					</li>
				</ul>
			</div>

			<br />

			<!-- Social media icons-->
			<div class="col-md-2 bg-light text-center my-auto mx-auto">
				<a href="https://www.facebook.com/groups/1164355296948736/" target="_blank">
					<img class="icon" src="img/social_media_icons/facebook2.png" alt="Facebook icon">
				</a>
				<a href="https://www.instagram.com/ulopc/" target="_blank">
					<img class="icon" src="img/social_media_icons/instagram2.png" alt="Instagram icon">
				</a>
				<a href="https://www.youtube.com/user/ULOutdoorpursuitsclu" target="_blank">
					<img class="icon" src="img/social_media_icons/youtube2.png" alt="Youtube icon">
				</a>
			</div>
		</div>
	</div>

	<div class="bg-dark">
		<p class="text-center m-0 copyright-footer"> © Copyright UL Outdoor Pursuits Club 2020</p>
	</div>	



	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.slim.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>