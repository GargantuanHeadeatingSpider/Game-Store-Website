<?php

include_once("connection.php");

function product_list(){
	$sql = "SELECT * FROM game;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>". $row['title'] ."</td><td>"."||||||||||"."</td><td>"."£".$row['cost'] ."</td><td>" ."</td></tr>";
		}
	}
}