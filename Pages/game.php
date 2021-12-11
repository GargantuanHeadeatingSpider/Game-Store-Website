<?php

class game {
	
	public $game_id;
	public $title;
	public $cost;
	public $genre;
	public $release_date;
	public $developer;
	public $publisher;
	public $description;
	public $image_link;
	
	function __construct($game_id,$title,$cost,$genre,$release_date,$developer,$publisher,$description,$image_link) {
		$this->game_id = $game_id;
		$this->title = $title;
		$this->cost = $cost;
		$this->genre = $genre;
		$this->release_date = $release_date;
		$this->developer = $developer;
		$this->publisher = $publisher;
		$this->description = $description;
		$this->image_link = $image_link;
	}
}