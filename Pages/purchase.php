<?php
// Session is included in all pages where login is required.
	include_once 'connection.php';
	session_start();	
	
	include_once 'connection.php';
	include_once 'login_functions.php';
	
	$user_data = check_login($conn);
?>

<HTML>
	<HEAD>
		<TITLE>ORDER</TITLE>
		<LINK href="order.css" rel="stylesheet" type="text/css">
		<STYLE>
			button {
				cursor: pointer;
			}
		</STYLE>
		<META charset="utf-8"/>
	</HEAD>
	<BODY>
		<div id="order_headbar">
			<h1>Purchase game</h1>
		</div>
		<div id="order_body">
			<h2>Purchase successful! Enjoy your game!</h2>
			<div id="order_footbar">
				<h1 id="foot">U.G.S</h1>
			</div>
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