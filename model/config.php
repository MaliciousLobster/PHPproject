<?php
	require_once(__DIR__ . "/Database.php");	
	session_start(); //creates info to be used throughout the files, once

	$path = "/PHPproject/"; //stores direct path to the project
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	//verifies when the session variable "connection" doesn't have info in it
	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database); //helps query on the database
		$_SESSION["connection"] = $connection; //creating database object, storing it in connection, and assigning it to the session variable "connection"
	}	