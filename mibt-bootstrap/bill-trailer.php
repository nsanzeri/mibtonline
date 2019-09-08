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
<?php
session_start (); // Starting Session
$content = ''; // Variable To Store Error Message
if (empty ( $_SESSION ['login_user'] )) {
	header ( "Location: bill-trailer1.php" );
	die ();
} else {
	if (empty ( $_SESSION ['is_paid'] )) {
		header ( "Location: bill-trailer2.php" );
		die ();
	} else {
	}
}
?>
<title>Bill LeMonnier Best Practices of Officiating for High School
	Football</title>

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
			Bill LeMonnier's Best Practices of Officiating for High School
			Football <small>2019 Edition  "ALL NEW FORMAT!"</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active">Trailer</li>
		</ol>

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<iframe src="https://player.vimeo.com/video/327349367" width="550"
					height="360" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<div class="col-lg-6">
				<h2>Bill LeMonnier</h2>
				<p>Check out the 2019 edition of BCS National Championship Referee and renowned clinician Bill LeMonnier's Best Practices of Officiating for High School Football. Bill, along with high school and NCAA official Tim Kiefer, provides valuable insight, breakdown, and analysis of rules, positioning, and mechanics in actual high school football games. This year's video is presented in an all new format with practical examples and discussion. Bill and Tim focus on three areas, Rules, Mechanic, and Judgment. Bill has officiated for over 40 years including 20 years in the Big Ten, appearances in 10 major bowl games, a NCAA National Championship game and was awarded the NASO/Referee Magazine 2013 Golden Whistle. Tim has officiated High School and College for over 20 years with numerous State Championships and NCAA division one games. 3 ways to purchase the video this year:
Online Streaming Version bu clicking the video to the left, Flash Drive: $19.99 (plus tax/shipping) and DVD: $17.95 (plus tax).  If you subscribe to the association, you get the streaming version of this year's video and the last three years as well as part of your membership!
</p>
					 <div class="row">
   <form action="https://www.paypal.com/cgi-bin/webscr"
									method="post" target="_top">

									<input type="hidden" name="cmd" value="_s-xclick"> <input
										type="hidden" name="hosted_button_id" value="LDXFDDG5BEHS4"> <input
										type="image"
										src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif"
										border="0" name="submit"
										alt="PayPal - The safer, easier way to pay online!"> <img
										alt="" border="0"
										src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
										width="1" height="1">
								</form>
								<form action="https://www.paypal.com/cgi-bin/webscr"
									method="post" target="_top">

									<input type="hidden" name="cmd" value="_s-xclick"> <input
										type="hidden" name="hosted_button_id" value="7BCWVZ3TLV2SW">

									<table>

										<tr>
											<td><input type="hidden" name="on0"
												value="Bill LeMonnier's Best Practices of Officiating Flash Drive 2019"></td>
										</tr>
										<tr>
											<td><select name="os0">

													<option value="1 Flash Drive">1 Flash Drive $19.95 USD</option>

													<option value="5 Flash Drive">5 Flash Drive $85.00 USD</option>

											</select></td>
										</tr>

									</table>

									<input type="hidden" name="currency_code" value="USD"> <input
										type="image"
										src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
										border="0" name="submit"
										alt="PayPal - The safer, easier way to pay online!"> <img
										alt="" border="0"
										src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"
										width="1" height="1">

								</form>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="hosted_button_id" value="WDYXW2X9FEGZN">

<table>

<tr><td><input type="hidden" name="on0" value="Bill LeMonnier's Best Practices of Officiating DVD 2019"></td></tr><tr><td><select name="os0">

                <option value="1 DVD">1 DVD $17.95 USD</option>

                <option value="5 DVD">5 DVD $50.00 USD</option>

                <option value="5 2018 DVD">5 2018 DVD $20.00 USD</option>

</select> </td></tr>

</table>

<input type="hidden" name="currency_code" value="USD">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

</form>
  </div>

			</div>
 

		</div>

		<!-- /.row -->

	</div>



	</div>
				<!-- /.container -->

</body>

</html>
