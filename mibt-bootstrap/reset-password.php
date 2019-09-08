<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');

// Function
require_once 'access.fn.php';
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'signup.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

 <?php require_once 'header.inc.php'; ?>
  

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
		<div id="login">
			<h2>Reset your Password</h2>
			<p>An email will be sent to you with instructions to reset your
				password.</p>
		</div>
		<form action="php-includes/reset-request.inc.php" method="post">
			<label>UserName :</label> <input type="text" name="email"
				placeholder="Enter Your Email Address...">
			<button type="submit" name="reset-request-submit">Receive new
				password by email</button>
		</form>
		<?php
		if (isset($_GET["reset"])) {
		    if ($_GET["reset"] == "success") {
		        echo '<p class="signupsuccess">Check your e-mail!</p>';
		    }
		}
		?>
	</div>
	</div>

	</div>
	<!-- /.container -->

	<!-- Footer -->
    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
