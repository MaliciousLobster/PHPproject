<?php
	require_once(__DIR__ . "/../model/config.php");//takes code from config.php


	unset($_SESSION["authenticated"]); //clears the variable of values. in this case logs out the user

	session_destroy(); //ends the session
	header("Location: " . $path . "index.php");