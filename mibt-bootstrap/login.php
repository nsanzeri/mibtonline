<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'access.fn.php';
require_once 'connect.inc.php';
require_once 'login.inc.php';

// require_once 'get-variables.inc.php';
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
			<h2>Login Form</h2>
			<form action="" method="post">
				<label>UserName :</label> <input id="name" name="username"
					placeholder="username" type="text"> <label>Password :</label> <input
					id="password" name="password" placeholder="**********"
					type="password"> <input name="submit" type="submit" value=" Login ">
				<span><?php echo $error; ?></span>
			</form>
			Not a member? <a class="nav-link" href='signup.php'>Sign up here</a>
		</div>

	</div>
	<!-- /.container -->
	<!-- Footer -->
		<?php require_once 'footer.inc.php'; ?>

</body>

</html>
