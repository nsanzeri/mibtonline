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

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
          <h1 class="mt-4 mb-3">Live Training
        <small>MIBT Online</small>
      </h1>
      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Live Training</li>
      </ol>
      <!-- Live Video/ Chat -->
    <div class="row">
      <div class="row">
        <div class="col-md-7">
          <a href="#">
           <iframe src="https://player.vimeo.com/video/282786084" width="1130" height="720" frameborder="0" allowfullscreen=""></iframe>
          </a>
        </div>
      </div>
       <div class="row">
        <div class="col-md-7">
          <a href="#">
          </a>
        </div>
      </div>
      <div class="row">
    <div id="page-wrap">
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
    </div>
    

   </div>
    <!-- /.container -->
</body>

</html>
