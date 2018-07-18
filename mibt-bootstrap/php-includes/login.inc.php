<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  } else {
    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    // echo('Username: '.$_POST['username']);
    // echo('password: '.$_POST['password']);

    // // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);

    // $stmt = $db->prepare("SELECT user_id, username, password, email, first_name, last_name, is_active, is_logged_in, is_paid, is_admin, join_date FROM user where password=$password AND username=$username");
    // $stmt->bind_result($user_id, $username, $password, $email, $first_name, $last_name, $is_active, $is_logged_in, $is_paid, $is_admin, $join_date);
    // $stmt->execute();
	// $numrows = $stmt -> num_rows;

    $sql = "select * from user where password='$password' AND username='$username'";
	$result = $db -> query($sql);
	$numrows = $result -> num_rows;

    // echo('numrows: '.$numrows);
    // echo('sql: '.$numrows);
    if ($numrows == 1) {
      	// while ($row = $result -> fetch_object()) {
		$row = $result -> fetch_object();
      $_SESSION['login_user']=$row->username; // Initializing Session
      // $_SESSION['login_user']=$username; // Initializing Session
     
      // $_SESSION['login_user']=$username; // Initializing Session
      header("location: index.php"); // Redirecting To Other Page
    } else {
      $error = "Username or Password is invalid";
    }

    // mysql_close($connection); // Closing Connection
  }
}
?>