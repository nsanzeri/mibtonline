<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

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
          <p>MIBTonline.com is a new and state of the art way for officials to receive pre-season and in-season training on a computer or mobile device. Meetings and clinics are streamed LIVE and can be watched virtually anywhere internet service is available. In addition, if you are unable to watch live, all meetings and clinics are recorded and available on-demand to watch at your convenience or to refer back to if necessary or desired. Also, MIBTonline offers members on-demand training videos to make you the best official possible. If you like what you see, please subscribe! </p>
          <p>Subscribe Now!</p>
				<a href="signup.php" class="btn btn-primary">Subscribe!</a>
			</div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

  </body>

</html>
