<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code form config.php


	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.

	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post' "); //stores a value into posts

	if($query) { //checks to see if the query was correctly run
		echo "<p>Successfully inserted post: $title</p>";
	} 
	else {
		echo "<p>$connection->error</p>";
	}


