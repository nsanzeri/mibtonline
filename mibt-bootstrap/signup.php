<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'signup.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

 <?php require_once 'header.inc.php'; ?>
  

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">MIBT Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>



    <!-- Page Content -->
    <div class="container">
                  <div id="login">
                    <h2>Signup Please</h2>
                              <form action="" method="post">
                                <label>UserName :</label>
                                <input id="name" name="username" placeholder="username" type="text">
                                <label>Password :</label>
                                <input id="password" name="password" placeholder="**********" type="password">
                                <label>Confirm Password :</label>
                                <input id="password_c" name="password_c" placeholder="**********" type="Confirm password">
                                <label>First Name :</label>
                                <input id="first_name" name="first_name" placeholder="username" type="text">
                                <label>Last Name :</label>
                                <input id="last_name" name="last_name" placeholder="username" type="text">
                                <label>Email :</label>
                                <input id="email" name="email" placeholder="username" type="text">

                                <input name="submit" type="submit" value="Signup and Login ">
                                <span><?php echo $error; ?></span>
                              </form>
                              Already a member? <a class="nav-link" href='login.php'>Sign in here</a>
                    </div>
    </div>    </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
