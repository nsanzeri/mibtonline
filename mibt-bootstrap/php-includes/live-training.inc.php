<?php
session_start(); // Starting Session
$content=''; // Variable To Store Error Message
echo("Username".$_SESSION['login_user']);
  if (empty($_SESSION['login_user'])) {
    $content = "log in asshole";
  } else {
  	if(empty($_SESSION['is_paid'])) {
  		$content = "Consider subscribing";
  	}else{
  		$content = "Here is your video";
  	}
  }
?>