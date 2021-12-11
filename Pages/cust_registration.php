<?php
	include_once 'connection.php';
	include_once 'login_functions.php';
	
	//1. Checks to see if the post method has been called.
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		
		//2. Something was submitted. 
		$username = $_POST ['username'];
		$forename = $_POST ['forename'];
		$surname = $_POST ['surname'];
		$email = $_POST ['email'];
		$password = $_POST ['password'];
		
		//3. Check to ensure fields are filled in. 
		if (!empty($username) && !empty($forename) && !empty($surname) && !empty($email) && !empty($password))
		{	
			//4. Upload to DB
			$id = random_num(9);
			$query = "INSERT INTO customer(cust_num, cust_username, cust_fn, cust_sn, cust_email, cust_password) VALUES('$id', '$username', '$forename', '$surname', '$email', '$password')";
			mysqli_query($conn, $query);
			
		}
		
		else 
		{
			
			//5. Contingency for if user fails to enter good input. 
			echo "All fields must be filled to continue. Username, forename, surname and email are non-numeric.";
		}
	//6. Redirect to login page upon registration completion.
	header("Location: cust_log_in.php");
	die;
	}
?>


<HTML>
	<HEAD>
		<TITLE>LOG IN</TITLE>
		<LINK href="login.css" rel="stylesheet" type="text/css">
		<STYLE>
			button {
				cursor: pointer;
			}
		</STYLE>
		<META charset="utf-8"/>
	</HEAD>
	<BODY>
		<div id="login_headbar">
			<h1>Login or Sign Up</h1>
		</div>
		<!--Registration form, users enter their details in these fields. 
		Upon completion, this information is uploaded to the database and said user is redirected 
		to the login page where they can use the username and password to sign in 
		and gain access to order viewing and purchases.-->
		<div id="reg">
			<h2>Please fill in all of the fields.</h2>
				<form method="post">
					<div class="divide"></div>
					<input type="text" name="username" placeholder="Username" class="regform"/>
					<div class="divide"></div>
					<input type="text" name= "forename" placeholder="Forename" class="regform"/>
					<div class="divide"></div>
					<input type="text" name= "surname" placeholder="Surname" class="regform"/>
					<div class="divide"></div>
					<input type="text" name= "email" placeholder="Email Address" class="regform"/>
					<div class="divide"></div>
					<input type="text" name= "password" placeholder="Password" class="regform"/>
					<div class="divide"></div>
					<button type="submit" name="submit" class="regbutton" value="Register">REGISTER</button>
					<div class="divide"></div>
					<a href="cust_log_in.php" class="link">Click here to log in if you already have an account.</a>
				</form>
				
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