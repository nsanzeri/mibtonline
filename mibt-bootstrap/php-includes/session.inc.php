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

  	$sql = "select * from user where password='$password' AND username='$username'";
	$result = $db -> query($sql);
	$numrows = $result -> num_rows;
    // $query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
    if ($numrows == 1) {
      $_SESSION['login_user']=$username; // Initializing Session
      header("location: index.php"); // Redirecting To Other Page
    } else {
      $error = "Username or Password is invalid";
    }
    // mysql_close($connection); // Closing Connection
  }
}
?>