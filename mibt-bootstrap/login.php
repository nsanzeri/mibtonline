<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'session.inc.php';
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
        <a class="navbar-brand" href="index.php">MIBT Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>

            <div id="main">
              <h1>PHP Login Session Example</h1>
              <div id="login">
                <h2>Login Form</h2>
                <form action="" method="post">
                  <label>UserName :</label>
                  <input id="name" name="username" placeholder="username" type="text">
                  <label>Password :</label>
                  <input id="password" name="password" placeholder="**********" type="password">
                  <input name="submit" type="submit" value=" Login ">
                  <span><?php echo $error; ?></span>
                </form>
              </div>
            </div>

</body>

</html>
