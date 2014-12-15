<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config.php
	require_once(__DIR__ . "/../view/header.php"); //takes code from header.php

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');


	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' "); //stores a value into posts

	if($query) { //checks to see if the query was correctly run, displays this info
		header("Location: " . $path . "index.php"); //directs the user back to index.php
	} 
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; //accesses the session connection variable
	}


