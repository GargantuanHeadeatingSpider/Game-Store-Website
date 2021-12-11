<?php

// As the name implies, this function first checks the session to ensure the user is logged into an account. 
// After this, the function then checks the database with a simple select to see if the customer ID signed in 
// matches that of a customer ID registered in the database.
// If these checks are successful, the function returns the user data necessary to access login-protected pages. 
function check_login($conn) {
	
	if(isset($_SESSION['cust_id'])) {
		
		$id = $_SESSION['cust_id'];
		$query = "SELECT * FROM customer WHERE cust_id = '$id' limit 1";
		
		$result = mysqli_query($conn, $query);
		if($result && mysqli_num_rows($result) > 0){
			
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	
	//Redirect to login page
	header("Location: cust_log_in.php");
	die;
}

// This function was a mistake that almost ruined the entire project.
function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		//Randomly generates numbers individually until the full number meets the len variable.

		$text .= rand(0,9);
	}

	return $text;
}