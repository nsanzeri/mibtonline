<?php
  session_start(); // Starting Session
  if (isset($_GET['logout'])) {
    if(session_destroy()) // Destroying All Sessions
    {
      header("Location: index.php"); // Redirecting To Home Page
    }
  }

?>