<?php

include_once("game.php");
include_once("connection.php");

class model {
	public function getGameList(){
		$sql = "SELECT * FROM game;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					foreach ($row = mysqli_fetch_assoc($result)) {
						return array(
						gm => new game($row['game_id'], $row['title'], $row['cost'], $row['genre'], $row['release_date'], $row['developer'], $row['publisher'], $row['description'], $row['image_link'], )
						);
					}
				}
	}
	
	public function getGame($title) {
		$allGames = $this->getGameList();
		return $allGames[$title];
	}
}