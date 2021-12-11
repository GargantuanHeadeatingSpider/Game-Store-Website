<?php

// Checks for the post method with the submit name being called, takes the data in the entry boxes and compiles this data
// into an email that is then sent to my student account. 
// Or at least it would be, if I could configure PHP's mail sending capabilities to send outgoing emails from localhost.
// The functionality is there, but the email doesn't actually send. 

if ($_POST['submit']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mssg = $_POST['message'];
	$subject = "MESSAGE";
	
	$mailTo = "callumhuscroft@hotmail.com";
	$headers = "From ".$email;
	$text = $name." has sent you a message!".".\n\n".$mssg;
	
	mail($mailTo, $subject, $text, $email, $headers);
	header("Location: contact.php?mailsend");
}
?>

<HTML>
	<HEAD>
		<TITLE>SENT</TITLE>
		<LINK href="contact.css" rel="stylesheet" type="text/css">
		<STYLE>
			button {
				cursor: pointer;
			}
		</STYLE>
		<SCRIPT>
		
		</SCRIPT>
		<META charset="utf-8"/>
	</HEAD>
	<BODY>
		<div id="contact_headbar">
			<h1>Message Sent</h1>
		</div>
		<div id="sent_body">
			<h2>Message successfully sent.</br>When you are ready, you can use the navbar to leave this page.</h2>
		</div>
		
		<!--Navbar, present on every page. 
		A simple unordered list of links fixed in one position on the screen, 
		therefore able to scroll alongside the rest of the window when the site requires scrolling.-->
		<nav>
			<div class="logo">
				<h4>U.G.S<h4>
			</div>
			<ul>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/home.php" class="navpoint">Home</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/products.php" class="navpoint">Games</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/about.php" class="navpoint">About Us</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/contact.php" class="navpoint">Contact</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/links.php" class="navpoint">Useful Links</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/cust_log_in.php" class="navpoint">Customer Login</a>
				</li>
				<li class="nav_li">
					<a href="http://localhost:8080/bh16gl_assignment_2/view/staff_log_in.php" class="navpoint">Admin Login</a>
				</li>
			</ul>
		</nav>
	</BODY>
</HTML>
