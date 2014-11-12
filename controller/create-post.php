<?php
	require_once(__DIR__ . "/../model/database.php"); //takes code form database.php

	$connection = new msqli($host, $username, $password, $database); //creates a connection to the database

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.

	echo "<p>Title: $title</p>"; //echos input
	echo "<p>Post: $post</p>"; //echos input

	$connection->close(); //closes the connection

