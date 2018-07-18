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
    // echo('email: '.$_POST['email']);
    // echo('password: '.$_POST['password']);

    // // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    if ($password != $password_c) {
       $error = "Passwords Don't Match";
    } 
    //check if the username already exits
    $sql = "select * from user where username='$username'";
    $result = $db -> query($sql);
    $numrows = $result -> num_rows;

    if ($numrows == 1) {
        $error = $error."<BR>Username ".$username . " already taken.";
    } else {
        $signed_up = false;
        $sql = "INSERT INTO `user` (`username`, `password`, `email`, `first_name`, `last_name`, `is_active`, `is_logged_in`) VALUES ('$username', '$password', '$email', '$first_name', '$last_name', '1','1');";
        if ($db -> query($sql) === TRUE) {
            // echo "New record created successfully";
            $signed_up = true;
        }
        if ($signed_up == TRUE) {
          $_SESSION['login_user']=$username; // Initializing Session
          header("location: index.php"); // Redirecting To Other Page
        } else {
          $error = $error."<BR>User was not created due to errors";
          //  echo $sql;
        }
      }
   }
}
?>