<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'index.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Bill Lemonnier Trailer</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
	<nav
		class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
	</nav>

	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">
			Live Training <small>Trailer</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active">Trailer</li>
		</ol>

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<iframe src="https://player.vimeo.com/video/269373371" width="550"
					height="360" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-lg-6">
				<h2>Bill Lemonnier</h2>
				<p>Check out the latest editions of BCS National Championship
					Referee and renowned clinician Bill LeMonnier's Best Practices of
					Officiating for High School Football. Along with high school and
					NCAA official Tim Kiefer, Bill provides valuable insight,
					breakdown, and analysis of rules, positioning, and mechanics in
					actual high school football games. This video is a must for any
					official looking to improve and be the best official possible. Bill
					officiated for over 40 years including 20 years in the Big Ten.
					Bill's extensive officiating experience include appearances in 10
					major bowl games, the inaugural Big Ten Championship game as well
					as Arena Bowl XVII & XXII. Bill also has had the opportunity to
					officiate internationally including the World Cup of American
					Football Championship in 2007, 2009 & 2011. Most recently, Bill was
					honored as the NASO/Referee Magazine 2013 Golden Whistle
					recipient.. Subscribe Now!</p>
				<p>Subscribe Now!</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
					target="_top">

					<input type="hidden" name="cmd" value="_s-xclick"> <input
						type="hidden" name="hosted_button_id" value="LDXFDDG5BEHS4"> <input
						type="image"
						src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif"
						border="0" name="submit"
						alt="PayPal - The safer, easier way to pay online!"> <img alt=""
						border="0"
						src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
						width="1" height="1">

				</form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

</body>

</html>
