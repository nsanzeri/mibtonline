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
    <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Bill LeMonnier
        <small>Best Practices of Officiating for Highschool Football</small>
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/bill.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <p>Bill comes to OfficiallySpeaking.com with an extensive background in officiating. Bill was a member of the Big Ten officiating staff for 20 years and has made appearances in numerous bowl games including the GMAC Bowl, Houston Bowl, Liberty Bowl, Independence Bowl, Cotton Bowl, Holiday Bowl, Orange Bowl, and Fiesta Bowl. Bill refereed the 2011 BCS National Championship and the inaugural Big Ten Championship game and has received many awards through out his career. Prior to the Big Ten, Bill officiated in the Gateway Conference, the CCIW and high school. He has also officiating internationally working in Japan, Mexico, Panama and Australia. 

Bill is an accomplished speaker, speaking at many camps and clinics across the country and the world annually as well as producing DVDs dedicated to football officiating training.</p>
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

      <!-- Pagination -->
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

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
