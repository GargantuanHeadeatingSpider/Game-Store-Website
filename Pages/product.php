<?php
	include_once 'connection.php';
?>

<HTML>
	<HEAD>
		<TITLE>GAMES</TITLE>
		<LINK href="products.css" rel="stylesheet" type="text/css">
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
		<div id="game_headbar">
			<h1>Games</h1>
		</div>
		<div id="game_body">
			<h2>Welcome to the Games page, feel free to browse our offerings!</h2>
			<?php
			// Get SKU is used to get the ID number of the chosen item from the link in the previous page.
			// This ID is used to inform the SQL query, so it knows which ID number to search the database for. 
				if ([$_GET['SKU']]) {
					$id = $_GET['SKU'];
					$sql = "SELECT * FROM game WHERE game_id = $id;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					// As a table isn't necessary here, the echo is simply done with paragraphs and line breaks. 
					// The individual game page shows all of the game's information.
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<p class='gamedata'>".$row['title'] ."</br></br>"."£".$row['cost']."</br></br>".$row['genre']."</br></br>".$row['release_date']."</br></br>".$row['developer']."</br></br>".$row['publisher']."</br></br>".$row['description']."</br></br>"."<a href='order.php?SKU=($id)' id='purchase_btn'>Purchase Game</a>"."</p>";
						}
					}
				}
			?>
			<div id="game_footbar">
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