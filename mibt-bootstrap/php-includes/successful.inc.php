<?php
session_start (); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset ( $_SESSION ['login_user'] )) {
	// Get user from the session
	$username = $_SESSION ['login_user'];
// 	echo $username;
	
	$sql = "update user set is_paid = 1 where username='$username'";
	if ($db->query ( $sql ) == TRUE) {
		$error = "Thank you for subscribing!";
	} else {
		$error = "There was trouble updating your subscription status.";
	}
}
?>