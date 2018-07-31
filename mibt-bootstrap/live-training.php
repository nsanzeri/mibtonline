<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'live-training.inc.php';
// require_once 'get-variables.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

   <?php require_once 'header-chat.inc.php'; ?>

  <body >


    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">


    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>
    <!-- Page Content -->

    <div id="page-wrap">
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>

     </div>
    <!-- /.container -->
        <!-- Footer -->
<!--         <h1>sdfgsdfg</h1> -->
		<?php require_once 'footer.inc.php'; ?>


</body>

</html>
