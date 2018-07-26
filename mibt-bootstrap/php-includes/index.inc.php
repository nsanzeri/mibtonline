<?php
  session_start(); // Starting Session
  if (isset($_GET['logout'])) {
    if(session_destroy()) // Destroying All Sessions
    {
      header("Location: index.php"); // Redirecting To Home Page
    }
    if($_SERVER['HTTP_REFERER'] ==  "*paypal*"){
    	// Update is_paid and join date for this user.
    }
  }

?>