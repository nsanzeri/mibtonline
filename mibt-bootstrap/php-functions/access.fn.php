<?php
// functions.php
function establishUserSession($username, $password){
	global $db, $error;
	$loggedIn = false;
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
		$loggedIn = true;
//		header("location: index.php"); // Redirecting To Other Page
	} else {
		$error = "Username or Password is invalid";
	}
	return $loggedIn;
}

function isGracePeriod(){
	global $db, $error;
	$grace_period = false;
	if ( $_SESSION != null){
		$username = $_SESSION['login_user'];
		$sql = "select * from user where username='$username'";
		$result = $db -> query($sql);
		$numrows = $result -> num_rows;
		if ($numrows == 1) {
			$row = $result -> fetch_object();
			$joinDate = new DateTime($row->join_date);
			$currDate = new DateTime(date("Y/m/d"));
			$difference = $currDate->diff($joinDate);
	// 		echo 'Difference: '.$difference->y.' years, '.$difference->m.' months, '.$difference->d.' days';
			if ($difference->y == 0){// Less than 1 year
				if ($difference->m == 0){// Less than 1 month
					if ($difference->d < 15){// Less than 14 days
						$_SESSION['grace_period']=true; 
						$grace_period = true;
					}
				}
			}
		}
	}
// 	echo('$grace_period: '.$grace_period);
	return $grace_period;
}
?>
