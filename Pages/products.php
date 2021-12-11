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
			<form id="searchbar" method="post">
				<label>Search</label>
				<input type="text" name="search" id="searchbar"/>
				<input type="submit" name="submit" id="submit" action="product.php?SKU=($sku)"/>

				
			</form>
			<table class="gametab">
			<th>Title</th>
			<th>Cost</th>
			<th>Genre</th>
			<?php 
			// Populates the table with data fetched from the game table of the database. 
			// Only part of the information is shown here, being the title, cost and genre, with the ID as a link 
			// to view the individual game on the product page. 
			// This plural page is for the list, singular for the individual item. 
			// A simple select query is ran, the number of results is checked and 
			// a while loop is used to iterate through the results, with an echo to format the chosen columns of the table.
			
				$sql = "SELECT * FROM game;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						$sku = $row['game_id'];
						echo "<tr><td>". $row['title'] . "</td><td>"."£".$row['cost'] ."</td><td>".$row['genre']."</td><td>"."<a href='http://localhost:8080/bh16gl_assignment_2/view/product.php?SKU=($sku)' method='get' class='numlink'>".$sku."</a>"."</td></tr>";
					}
				}
			?>
			</table>
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