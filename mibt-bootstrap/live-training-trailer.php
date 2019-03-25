<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Live Training Trailer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Live Training
    </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Trailer</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
<iframe src="https://player.vimeo.com/video/318629828" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
          <h2>MIBT Online Live-Training</h2>
          <p>MIBT Online's Live Training is a first of it's kind offering officials LIVE interactive officiating education and training virtually anywhere in the world. Our Live Streaming meetings and clinics gives you the flexibility to watch live and interact with the speakers via a real time chat room, or watch later at was is most convenient to your life as all meetings and clinics are recorded and available On-Demand!  Watch a past recorded live meeting to the left to get an idea of the type of training we provide.  If you like what you see, please subscribe! </p>
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
