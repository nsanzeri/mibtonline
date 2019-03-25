<?php
// functions.php
function establishUserSession($username, $password){
	global $db, $error;

	$sql = "select * from user where password='$password' AND username='$username'";
	$result = $db -> query($sql);
	$numrows = $result -> num_rows;
	
	// echo('numrows: '.$numrows);
	// echo('sql: '.$numrows);
	if ($numrows == 1) {
		// while ($row = $result -> fetch_object()) {
		$row = $result -> fetch_object();
		$_SESSION['login_user']=$row->username; // Initializing Session
		$_SESSION['is_paid']=$row->is_paid; // Initializing Session
		header("location: index.php"); // Redirecting To Other Page
	} else {
		$error = "Username or Password is invalid";
	}
}

function check_price($price, $id){
	$valid_price = false;
	//you could use the below to check whether the correct price has been paid for the product
	
	/*
	$sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");
	if (mysql_num_rows($sql) != 0) {
		while ($row = mysql_fetch_array($sql)) {
			$num = (float)$row['amount'];
			if($num == $price){
				$valid_price = true;
			}
		}
	}
	return $valid_price;
	*/
	return true;
}

function updatePayments($data){
	global $link;
	
	if (is_array($data)) {
		$sql = mysql_query("INSERT INTO `payments` (txnid, payment_amount, payment_status, itemid, createdtime) VALUES (
				'".$data['txn_id']."' ,
				'".$data['payment_amount']."' ,
				'".$data['payment_status']."' ,
				'".$data['item_number']."' ,
				'".date("Y-m-d H:i:s")."'
				)", $link);
		return mysql_insert_id($link);
	}
}
