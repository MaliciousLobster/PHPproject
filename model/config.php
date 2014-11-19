<?php
	require_once(__DIR__ . "/Database.php");

	$path = "/PHPproject/"; //stores direct path to the project
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	$connection = new Database($host, $username, $password, $database); //helps query on the database
