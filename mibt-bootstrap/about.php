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

    <title>MIBT Online - About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
      <h1 class="mt-4 mb-3">About
        <small>MIBT Online</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/about.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2>About</h2>
          <p>MIBTonline.com is a new and state of the art way for officials to receive pre-season and in-season training on their computer or mobile device. Meetings and clinics are streamed LIVE and can be watched virtually anywhere internet service is available. In addition, if you are unable to watch live, all meetings and clinics are recorded and available on-demand to watch at your convenience or to refer back to if necessary or desired. Also, MIBTonline offers members on-demand training videos to make you the best official possible.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images/tim.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Tim Kiefer</h4>
              <h6 class="card-subtitle mb-2 text-muted">President and Founder</h6>
              <p class="card-text">Tim was key in the implementation of a video based officiating education platform developed by the Illinois High School Associaton and adopted by the National Federation of High Schools for use nationally. Tim has also done video education work with the Big Ten as well as many other sports officiating associations and organizations.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="images/bill.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Bill LeMonnier</h4>
              <h6 class="card-subtitle mb-2 text-muted">Contributor</h6>
              <p class="card-text"> Bill comes to MIBTonline.com with an extensive background in officiating. Bill was a member of the Big Ten officiating staff for 20 years and has made appearances in numerous bowl games including the GMAC Bowl, Houston Bowl, Liberty Bowl, Independence Bowl, Cotton Bowl, Holiday Bowl, Orange Bowl, and Fiesta Bowl. Bill refereed the 2011 BCS National Championship and the inaugural Big Ten Championship game and has received many awards throughout his career. Prior to the Big Ten, Bill officiated in the Gateway Conference, the CCIW and high school. He has also officiating internationally working in Japan, Mexico, Panama and Australia. Bill is an accomplished speaker, speaking at many camps and clinics across the country and the world annually as well as producing football officiating training videos. Bill is an retired school teacher and administrator. He is married, has three kids and currently resides in Tinley Park, Illinois .</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
	<?php require_once 'footer.inc.php'; ?>

  </body>

</html>
