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
    // if (empty($_POST['username']) || empty($_POST['password'])) {

    // // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    establishUserSession($username, $password);    
    header ( "Location: login-success2test.php" );
    die ();
}
}
?>