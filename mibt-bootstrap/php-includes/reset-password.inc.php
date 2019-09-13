<?php
if(isset($_POST['submit'])){

	$email=$_POST['email'];

	//Call function to see if email exists
	$userFound = findUserByEmail($_POST['email']);
	if ($userFound){
		//Call to Generate password functionality
		$updated = updateUserByEmail(generateRandomString(), $_POST['email']);
		if ($updated){

			//Send mail
			$to=$_POST['email'];
			$subject='New Password';
			$body='<html>
			 <body>
			 <h3>Feedback</h3>
			 <hr>
						
						
			 <p> Email : '.$email.'</p>
						
			 </body>
						
			 </html>';
			
			$headers  ="From:"."Someone"."<".$email.">\r\n";
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
				
		}else{
			
		}
	}
	
?>