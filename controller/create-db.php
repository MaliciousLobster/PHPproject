<?php
	require_once(__DIR__ . "/../model/config.php");	//creates connection to the server


	$query = $_SESSION["connection"]->query("CREATE TABLE posts (" //creates a table called post with an id
		. "id int(11) NOT NULL AUTO_INCREMENT,"        //and a title with up to 255 characters
		. "title varchar(255) NOT NULL,"               //noneh of them can be null.
		. "post text NOT NULL,"
		. "PRIMARY KEY (id) )");						//tells our table that the primary key is my ID

	if($query) {
		echo " Succesfully created table: posts"; //runs the query, creates the table once
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //echos out that the table has already been created
	}
