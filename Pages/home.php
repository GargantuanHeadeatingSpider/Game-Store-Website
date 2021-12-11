<?php
	// Leftover from my attempt at integrating a search bar with the navbar. 
	include_once("connection.php");
?>

<HTML>
	<HEAD>
		<TITLE>HOME</TITLE>
		<LINK href="home.css" rel="stylesheet" type="text/css">
		<META charset="utf-8"/>
	</HEAD>
	<BODY>
		<div id="home_page">
			<h1>ULTIMATE GAME STORE</h1>
			<h2>Welcome to the home page. Come for the games, stay for the impeccable web design.</h2>
			<p class="home_paragraph">
				Below is a list of this website's facilities.</br>
				You can also find these pages on the interactive navigation bar, should you somehow get lost.</br>
				We hope you enjoy your stay!
				
			</p>
		</div>
		<!--Buttons are stored in a container with an ID, the buttons are hyperlinks styled in CSS to better resemble buttons.-->
		<div id="button_container">
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/products.php" class="button">Browse Our Games</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/about.php" class="button">Get To Know Us</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/contact.php" class="button">Contact Us</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/links.php" class="button">Useful Links</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/cust_log_in.php" class="button">Customer Login and Registration</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/view_orders.php" class="button">View Orders</a>
			<div class="divide"></div>
			<a href="http://localhost:8080/bh16gl_assignment_2/view/logout.php" class="button">Logout</a>
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