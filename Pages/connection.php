<?php

// All connections to the database are handled with this connection PHP file. 
// Variable names below clearly reflect the mysqli_connect parameters,
// getting server name, username, password and the name of the target database.
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "usbw";
$dbName = "game_store";

// Conn is used in all SQL queries on this site. 
if(!$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName)) {
		// Contingency in case the client cannot connect to the database. 
		// It's unlikely any user will ever see this die message.
	die("Connection Failed.");
};
