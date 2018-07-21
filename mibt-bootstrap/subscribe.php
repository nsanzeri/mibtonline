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
          <h1 class="mt-4 mb-3">Subscribe
            <small>.</small>
          </h1>
    
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Services</li>
          </ol>
    
          <!-- Image Header -->
          <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">
    
          <!-- Marketing Icons Section -->
          <div class="row">
            <div class="container">
              <div class="card h-100">
                <h4 class="card-header">Live Assosciation</h4>
                <div class="card-body">
                  <p class="card-text">MIBT Online's new Live assosciation .</p>
                </div>
                <div class="card-footer">
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">             
                    <input type="hidden" name="hosted_button_id" value="LDXFDDG5BEHS4">                    
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">                    
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">                   
                    </form>
                </div>
              </div>
            </div>
          <!-- /.row -->       
  </body>
</html>
