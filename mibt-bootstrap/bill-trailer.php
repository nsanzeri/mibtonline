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

    <title>Bill Lemonnier Trailer</title>

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
      <h1 class="mt-4 mb-3">Live Training
        <small>Trailer</small>
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
          <iframe src="https://player.vimeo.com/video/269373371" width="550" height="360" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
          <h2>Bill Lemonnier</h2>
          <p> 

Bill's Best Practices of Football Officiating DVD is the backbone of MIBTonline.com.  Bill was a member of the Big Ten officiating staff for 20 years and has made appearances in numerous bowl games including the GMAC Bowl, Houston Bowl, Liberty Bowl, Independence Bowl, Cotton Bowl, Holiday Bowl, Orange Bowl, and Fiesta Bowl. Prior to the Big Ten, Bill officiated in the Gateway Conference, the CCIW and high school. He has also officiating internationally working in Japan, Mexico, Panama and Australia. Bill is an accomplished speaker, speaking at many camps and clinics across the country and the world annually as well as producing DVDs dedicated to football officiating training.</p>
          <p>Subscribe Now!</p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">             
                    <input type="hidden" name="hosted_button_id" value="LDXFDDG5BEHS4">                    
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">                    
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">                   
         </form>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

  </body>

</html>
