<?php
session_start(); // Starting Session
$content=''; // Variable To Store Error Message
echo("Username".$_SESSION['login_user']);
  if (empty($_SESSION['login_user'])) {
      header( "Location: signup.php" ); die;
  } else {
  	}
  }
?>