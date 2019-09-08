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
      <!-- Marketing Icons Section -->
      <br>
      <div class="container">

          <div class="card h-100">
            <h4 class="card-header">Success!</h4>
            <div class="card-body">
              <p class="card-text">Thank you for signing up!  If you'd like to gain full access to the site, please login below! </p>
            </div>
            <div class="card-footer">
<a href="login.php" class="btn btn-primary">Log In!</a>
            </div>
    
        </div>
            <br>
            <br>
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