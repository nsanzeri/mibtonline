<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';
require_once 'access.fn.php';
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
  <body>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Membership
        <small>Pricing</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Pricing</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">BASIC</h3>
            <div class="card-body">
              <div class="display-4">$39.00</div>
              <div class="font-italic">a year</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
A BASIC subscription allows full access to the entire website which includes all live training, all on-demand training, all produced training videos, and an online physical fitness assessment.  Automatic renewal billed yearly, cancel anytime.
<br>
<br>
<br>
<br>
<br>
<br>
</li>
              <li class="list-group-item">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="hosted_button_id" value="LDXFDDG5BEHS4">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

</form>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card card-outline-primary h-100">
            <h3 class="card-header bg-primary text-white">PREMIUM</h3>
            <div class="card-body">
              <div class="display-4">$59.00</div>
              <div class="font-italic">a year</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
A PREMIUM subscription allows full access to the entire website which includes all live training, all on-demand training, all produced training videos, and an online physical fitness assessment.  In addition, all PREMIUM members are covered for supplemental medical insurance up to $10000 per year and $1000000 of liability insurance*.  (*Some restrictions apply.  Please <a href="https://www.mibtmedia.com/insurance/MIBTonline-insurance.pdf">click here</a> here for more details.)  Automatic renewal billed yearly, cancel anytime.</li>
              <li class="list-group-item">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="hosted_button_id" value="MM9LNXSNGXPK2">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

</form>
              </li>
            </ul>
          </div>
        </div>
     
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
      </div>
      <!-- /.row -->

      
    </div>
    <!-- /.container -->

    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>