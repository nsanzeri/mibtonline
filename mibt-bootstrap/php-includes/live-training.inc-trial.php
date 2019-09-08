<?php
session_start (); // Starting Session
$content = ''; // Variable To Store Error Message
if (empty ( $_SESSION ['login_user'] )) {
	header ( "Location: signup.php" );
	die ();
} 
?>