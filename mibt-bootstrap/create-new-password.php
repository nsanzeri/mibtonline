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
<?php 
$selector = $_GET["selector"];
$validator = $_GET["validator"];

if (empty($selector) || empty($validator)) {
    echo "could not validate request!";
    
}
else {
    if (ctype_xdigit($selector) !== false && (ctype_xdigit($validator) !== false) {
        ?>
    
     
       <form action="includes/reset-password.inc.php" method="post">
       <input type="hidden" name ="selector" value" <?php echo $selector ?>
          <input type="hidden" name ="selector" value" <?php echo $validator ?>
          <input type="password" name ="pwd" placeholder="Enter a new password...">
          <input type="password" name ="pwd-repeat" placeholder="Repeat new password...">
          <button type="submit" name="reset-password-submit">Reset Password</button>
       </form>
     <?php
   
    
}

?>


	<!-- Page Content -->
	<div class="container">
		
	</div>
	<!-- /.container -->

	<!-- Footer -->
    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
