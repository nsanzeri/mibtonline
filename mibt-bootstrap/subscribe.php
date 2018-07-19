<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'index.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.inc.php'; ?>
  

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>

      <!-- Page Content -->
    <div class="container">
	    <div id="login">
			<form action="php-includes/subscribe.inc.php" method="post" id="paypal_form" target="_blank">
				<input type="hidden" name="cmd" value="_xclick" />
				<input type="hidden" name="no_note" value="1" />
				<input type="hidden" name="lc" value="UK" />
				<input type="hidden" name="currency_code" value="GBP" />
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
				<input type="hidden" name="first_name" value="Customer's First Name"  />
				<input type="hidden" name="last_name" value="Customer's Last Name"  />
				<input type="hidden" name="payer_email" value="customer@example.com"  />
				<input type="hidden" name="item_number" value="123456" / >
				<input type="submit" name="submit" value="Submit Payment"/>
			</form>
		</div>
    </div>
    <!-- /.container -->

    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
