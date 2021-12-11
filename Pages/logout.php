<?php

session_start();

// Checks if a user is logged in. If they are logged in, log them out. 
if (isset($_SESSION['cust_id'])) {
	
	unset($_SESSION['cust_id']);
}

header("Location: cust_log_in.php");
die;