<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password); 

	if($connection->connect_error){
		die("error:" . $connection->connect_error);
	}
	
	$exists = $connection->select_db($database);

	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");

		if($query) {
			echo "successfully created database " . $database;
		}

	}
	else {
		echo "Database has already been created.";
	}

	$query = $connection->query("CREATE TABLE posts (" //creates a table called post with an id
		. "id int(11) NOT NULL AUTO_INCREMENT,"        //and a title with up to 255 characters
		. "title varchar(255) NOT NULL,"               //non of them can be null
		. "post text NOT NULL"
		. "PRIMARY KEY (id)");

	if($query) {
		echo "Succesfully created table: posts";
	}

	$connection->close();