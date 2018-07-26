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
          <p>MIBT Media is a dynamic company that offers a variety of media services. Some of our services include:</p>
          <p>Sports Officiating Education,
Education Clinic/Camp Event Planning and Management,
Instructional Videos,
Sports Officiating Assignment/Scheduling Management,
Sports Entertainment,
Family Videos,
Documentary Production,
Podcast Production and Editing,
Live Webcast and Production,
Special Events,
Sports Officiating Services,
Player Showcases (College Recruiting).
          </p>
          <p>Whatever your media needs are, MIBT Media has the solution that will best fit you.</p>
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
              <p class="card-text">Bill is an accomplished speaker, speaking at many camps and clinics across the country and the world annually as well as producing DVDs dedicated to football officiating training.</p>
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
