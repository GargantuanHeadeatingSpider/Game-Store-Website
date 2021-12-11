<HTML>
	<HEAD>
		<TITLE>CONTACT US</TITLE>
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
			<h1>Contact Us</h1>
		</div>
		<div id="contact_body">
			<h2>Please enter your name, email address and message.</h2>
			<!-- The form action opens the message sent file, 
			the post method is what the message sent page detects 
			and uses that to compose and send an email to the target address. -->
				<form action="contact_form.php" method="post">
				<div class="divide"></div>
				<input type="text" name="name" placeholder="Name" class="form"/>
				<div class="divide"></div>
				<input type="text" name= "email" placeholder="Email Address" class="form"/>
				<div class="divide"></div>
				<textarea rows="20" cols="40" class="area" name="message" placeholder="Enter your message here."></textarea>
				<button type="submit" name="submit" class="button">SUBMIT MESSAGE</button>
				</form>
			<div id="contact_footbar">
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