<!DOCTYPE html>
<html lang="en">

<head>

	<meta name="author" content="Padraig McCarthy">
	<meta name="description" content="Outdoor Pursuits Club is one of UL's biggest and active clubs! We have everything from climbing and hiking to orienteering and caving!">
	<meta name="keywords" content="OPC,UL,climbing,outdoor,pursuits,club,university,limerick,bouldering,trad,society">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/ico">

	<title>About Us</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Csutom CSS -->
	<link rel="stylesheet" type="text/css" href="custom.css">

	<script>
		// variable used to highlight navbar link on current page
		// corresponding navbar item in the navbar.html must have id equal to value of pageID
		var pageID = "faq";
	</script>

</head>

<body class="bg-light">	

	<!-- Navbar -->
	<?php include 'navbar.html'; ?>

	<!-- Page Content -->

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid m-0">
		<div class="container-fluid p-0 d-flex align-items-center flex-column">
			<div class="row">
				<div class="col-md-12 text-center banner-text mb-10">
					<h1 class="banner-text pb-30">
						Frequently Asked Questions
					</h1>
					<a class="btn btn-dark btn-md rounded-pill banner-text m-0" href="https://ulwolves.ie/club/outdoor-pursuits" target="_blank">
						Go to ULWolves.ie
					</a>
				</div>
			</div>
		</div>
	</div>

	<br>

	<?php
	
	$faqs = array(
		"How can I sign up?" => "Go to <a href=\"https://ulwolves.ie/club/outdoor-pursuits\" target=\"_blank\">ULWolves.ie</a> and login/sign up!",
		"When is the wall open?" => "The wall is open every Monday, Tuesday and Thursday from 7pm until 10pm.",
		"When can I go hiking?" => "We host regular hiking trips most Sundays to various locations around Ireland.",
	);
	$count = 0;
	
	?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<?php foreach ($faqs as $question=>$answer) { ?>
					<p>
						<a class="btn btn-dark btn-block banner-text text-left" data-toggle="collapse" href="#faqID<?php print "$count";?>" role="button">
							<?php print "$question" ?>
						</a>
					</p>
					<div class="collapse" id="faqID<?php print "$count";?>">
						<div class="card card-body mb-3 px-3 py-1">
							<p class="m-0">
								<?php print "$answer"; ?>
							</p>
						</div>
					</div>
					<?php $count++;
				 } ?>
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
