<?php
function generateRandomString($length = 10) {

	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	//echo  generateRandomString();  // OR: generateRandomString(24)
}

function findUserByEmail($email){
	global $db, $error;
	$found = false;
	$sql = "select * from user where email='$email'";
	$result = $db -> query($sql);
	$numrows = $result -> num_rows;

	// echo('numrows: '.$numrows);
	// echo('sql: '.$numrows);
	if ($numrows == 1) {
		// while ($row = $result -> fetch_object()) {
		$row = $result -> fetch_object();
		$_SESSION['email']=$row->email;
		$found = true;
	} else {
		$error = "No User found with that email address";
	}
	return $found;
}

function updateUserByEmail($randomPassword){
	global $db, $error;
	$update = false;
	$sql = "update user set password = '$randomPassword' where email='$email'";
	$result = $db -> query($sql);
	$numrows = $result -> num_rows;

	// echo('numrows: '.$numrows);
	// echo('sql: '.$numrows);
	if ($numrows == 1) {
		// while ($row = $result -> fetch_object()) {
		$row = $result -> fetch_object();
		$updated = true;
	} else {
		$error = "No User found with that email address";
	}
	return $updated;
}
?>
    
   
