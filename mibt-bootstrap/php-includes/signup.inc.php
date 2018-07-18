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
    $password_c=$_POST['password_c'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    echo('email: '.$_POST['email']);
    // echo('password: '.$_POST['password']);

    // // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
     if ($password != $password_c) {
     $error = "Passwords Don't Match";
     }
    // $stmt = $db->prepare("SELECT user_id, username, password, email, first_name, last_name, is_active, is_logged_in, is_paid, is_admin, join_date FROM user where password=$password AND username=$username");
    // $stmt->bind_result($user_id, $username, $password, $email, $first_name, $last_name, $is_active, $is_logged_in, $is_paid, $is_admin, $join_date);
    // $stmt->execute();
	// $numrows = $stmt -> num_rows;
     $signed_up = false;
    $sql = "INSERT INTO `user` (`username`, `password`, `email`, `first_name`, `last_name`, `is_active`, `is_logged_in`) VALUES ('$username', '$password', '$email', '$first_name', '$last_name', '1','1');";
    if ($db -> query($sql) === TRUE) {
        echo "New record created successfully";
        $signed_up = true;
    }else{
        echo "You fucked up <BR>".$sql;
    }
    // echo('numrows: '.$numrows);
    // echo('sql: '.$numrows);
    if ($signed_up == TRUE) {
      $_SESSION['login_user']=$username; // Initializing Session
      header("location: index.php"); // Redirecting To Other Page
    } else {
      $error = $error."<BR>User Information Invalid";
    }
  }
}
?>