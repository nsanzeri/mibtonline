<?php
session_start (); // Starting Session
$content = ''; // Variable To Store Error Message
if (empty ( $_SESSION ['login_user'] )) {
	header ( "Location: signup.php" );
	die ();
} else {
	if (empty ( $_SESSION ['is_paid'] )) {
		header ( "Location: live-training-trailer.php" );
		die ();
	} else {
	}
}
?>