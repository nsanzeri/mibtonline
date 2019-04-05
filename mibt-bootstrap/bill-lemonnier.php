<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
require_once 'access.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'bill.inc.php';
// require_once 'get-variables.inc.php';
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
    <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Bill LeMonnier
        <small>Best Practices of Officiating for High School Football</small>
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/bill.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <p>Check out the latest editions of BCS National Championship Referee and renowned clinician Bill LeMonnier's Best Practices of Officiating for High School Football. Along with high school and NCAA official Tim Kiefer, Bill provides valuable insight, breakdown, and analysis of rules, positioning, and mechanics in actual high school football games. This video is a must for any official looking to improve and be the best official possible. Bill officiated for over 40 years including 20 years in the Big Ten. Bill's extensive officiating experience include appearances in 10 major bowl games, the inaugural Big Ten Championship game as well as Arena Bowl XVII & XXII. Bill also has had the opportunity to officiate internationally including the World Cup of American Football Championship in 2007, 2009 & 2011. Most recently, Bill was honored as the NASO/Referee Magazine 2013 Golden Whistle recipient.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Videos</li>
      </ol>

      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe src="https://player.vimeo.com/video/281299740" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>2018</h3>
          <p>Bill LeMonnier's third "Best Practices of Officiating for Highschool Football" Recorded and published in 2018.</p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/281299740">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe src="https://player.vimeo.com/video/281329114" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>2017</h3>
          <p>Bill LeMonnier's second "Best Practices of Officiating for Highschool Football" Recorded and published in 2017.</p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/281329114">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Three -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe src="https://player.vimeo.com/video/281365984" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>2016</h3>
          <p>Bill LeMonnier's first "Best Practices of Officiating for Highschool Football" Recorded and published in 2016.</p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/281365984">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Pagination
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="portfolio-1-col.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">.</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">.</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
      -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>
