<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
require_once 'access.fn.php';
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
  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>MIBT Online</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="contactform" method="post" action="php-functions/sendmail.fn.php"  id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first_name" maxlength="50" size="30" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name" maxlength="50" size="30" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="telephone" maxlength="30" size="30" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" maxlength="80" size="30" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="comments" maxlength="1000" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
			<div id="hp-div">
				If you see this, leave this form field blank and invest in CSS
				support. <input type="text" name="question_20579" value="" />
			</div>            
            <!-- For success/fail messages --> 
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
          </form>
        </div>
       

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
