<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');

// Function
require_once 'access.fn.php';
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
require_once 'signup.inc.php';
require_once 'reset-request.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

 <?php require_once 'header.inc.php'; ?>
  

  <body>

	<!-- Navigation -->
	<nav
		class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
	</nav>



	<?php
if(isset($_POST['submit'])){
 $name=$_POST['name'];
  $email=$_POST['email'];

  //send mail 
  $to=$_POST['email'];
 $subject='New Password';
 $body='<html>
 <body>
 <h3>Feedback</h3>
 <hr>

 <p> Name : '.$name.'</p>
 <br>

 <p> Email : '.$email.'</p>

 </body>

 </html>';

 $headers  ="From:".$name."<".$email.">\r\n";
 $headers .="reply-To:".$email."\r\n";
 $headers .="NINE-Version: 1.0\r\n";
 $headers .="Content-type: text/html; charset=utf-8";


//confirmation mail
 $user=$email;
 $usersubject = "New Password";
 $userheaders = "From: mibtonlinepwdreset@gmail.com\n";
 $usermessage = "Thank You";


//sending process
 $send=mail($to, $subject, $body, $headers);
 $confirm=mail($user, $usersubject, $userheaders,$usermessage );

 if($send && $confirm){
  echo "success";
 }

 else{
  echo "Failed";
 }

}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>
<body>
<form action="" method="POST">

<input type="text" name="name" placeholder="Name">
<input type="email" name="email" placeholder="email">
<input type="submit" name="submit" value="send">
</form>

</body>
</html>
	<!-- /.container -->

	<!-- Footer -->
    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
