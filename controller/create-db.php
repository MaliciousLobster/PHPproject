<?php
	require_once(__DIR__ . "/../model/database.php");	//creates connection to the server

	$connection = new mysqli($host, $username, $password);	//the object we use to connect to the server

	if($connection->connect_error){			//accessing a property called 'connect_error', checking for a connection error
		die("error:" . $connection->connect_error);		//if there's an error it will kill the program & tell the user what the error was
	}
	
	$exists = $connection->select_db($database); //select_db tries to connect to the MYSQL server

	if(!$exists) {			//checks to see if the database does not exist
		$query = $connection->query("CREATE DATABASE $database");		//if the databse does not exist it will issue a query
																		//creating a databases
		if($query) {
			echo "successfully created database " . $database;
		}

	}
	else {
		echo "Database has already been created.";	//if the database was created already it echos this out.
	}

	$query = $connection->query("CREATE TABLE posts (" //creates a table called post with an id
		. "id int(11) NOT NULL AUTO_INCREMENT,"        //and a title with up to 255 characters
		. "title varchar(255) NOT NULL,"               //non of them can be null.
		. "post text NOT NULL,"
		. "PRIMARY KEY (id) )");						//tells our table that the primary key is my the ID

	if($query) {
		echo " Succesfully created table: posts"; //runs the query, creates the table once
	}
	else {
		echo "<p> $connection->error </p>"; //echos out that the table has already been created
	}


	$connection->close();