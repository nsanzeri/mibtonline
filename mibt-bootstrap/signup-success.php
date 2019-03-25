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
      <!-- Marketing Icons Section -->
      <div class="container">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Success!</h4>
            <div class="card-body">
              <p class="card-text">Thank you for signing up!  Please click on "login" at the top of the site to login and explore MIBTonline.com</p>
            </div>
            <div class="card-footer">
              <a href="index.php" class="btn btn-primary">Go Back Home</a>
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