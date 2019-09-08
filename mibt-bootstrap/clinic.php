<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');

// Function
require_once 'access.fn.php';
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

<title>MIBTonline.com Clinic</title>

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
			2nd Annual MIBTonline.com LIVE Streaming Clinic
			<small>Available On-Demand with Subscription</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active">Clinic</li>
		</ol>

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<iframe src="https://player.vimeo.com/video/333195584" width="550"
					height="360" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<div class="col-lg-6">
				<h2>MIBTonline.com Clinic Information</h2>
				<p>MIBTonline.com is now available ON-DEMAND for subscribers.  To become a member, please subscribe below! 
</p>
					  <div class="row">

 <div class="card-footer">
   				<a href="signup.php" class="btn btn-primary">Subscribe!</a>
            </div>
								


  </div>

			</div>
 

		</div>

		<!-- /.row -->

	</div>



	</div>
				<!-- /.container -->

</body>

</html>
