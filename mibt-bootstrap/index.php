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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://coppincon.weebly.com/uploads/2/7/0/7/27079585/banner-3-0_orig.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Welcome To MIBT Online<?php if(isset($_SESSION['login_user'])){ echo ', '.$_SESSION['login_user'];} ?></h3>
              <p>A dynamic company that offers a variety of media services</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://coppincon.weebly.com/uploads/2/7/0/7/27079585/banner-1-0_2_orig.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>What We Do</h3>
              <p>We aim to educate and entertain people through media</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://coppincon.weebly.com/uploads/2/7/0/7/27079585/banner-2-0_2_orig.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Learn More</h3>
              <p>Visit our about page to find out more!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Live Training</h4>
            <div class="card-body">
              <p class="card-text">To Sign Up for our live training, click the button below. After registeration, you will have access to our various Subscription plans.</p>
            </div>
            <div class="card-footer">
              <a href="signup.php" class="btn btn-primary">Signup</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">About Us</h4>
            <div class="card-body">
              <p class="card-text">MIBT is a very extensive Media Company, that deals with a multitude of services. If you want to find out more about who we are and what we do, click the button below</p>
            </div>
            <div class="card-footer">
              <a href="about.php" class="btn btn-primary">About</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Videos</h4>
            <div class="card-body">
              <p class="card-text">If you want to see more videos free of charge, click the button below. We have plenty of archived videos, and new uploads to check out.</p>
            </div>
            <div class="card-footer">
              <a href="portfolio-1-col.php" class="btn btn-primary">Videos</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      
    </div>
    <!-- /.container -->

    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
