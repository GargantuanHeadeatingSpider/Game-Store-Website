<?php
session_start();

	include("connection.php");
	include("login_functions.php");

//1. Checks to see if the post method has been called.
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//2. Something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//3. Ensure none of the fields are empty. 
		if(!empty($username) && !empty($password))
		{

			//4. If not empty, a query is made to test whether the username matches one registered in the database.
			$query = "SELECT * FROM customer WHERE cust_username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					//5. Get data from the table entry matching the username entered in login screen. 
					$user_data = mysqli_fetch_assoc($result);
					
					//6. Check to ensure the password entered matches the one in the database. 
					if($user_data['cust_password'] === $password)
					{
						//7. If all checks are successful, the user data is passed to the 
						// session variable and the user is logged in and redirected to the home page.
						$_SESSION['cust_id'] = $user_data['cust_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "Access Denied";
		}else
		{
			echo "Access Denied";
		}
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
		<div id="login">
			<h2>Please enter your username and password.</h2>
				<form method="post">
					<div class="divide"></div>
					<input type="text" name="username" placeholder="Username" class="form"/>
					<div class="divide"></div>
					<input type="text" name= "password" placeholder="Password" class="form"/>
					<div class="divide"></div>
					<button type="submit" name="submit" class="button" value="Login">LOG IN</button>
					<div class="divide"></div>
					<a href="cust_registration.php" class="link">Click here for registration if you don't have an account.</a>
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