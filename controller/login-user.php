<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.

                //selects the salt & password from the table "users" where username is = to the username that the user has input
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	if($query->num_rows == 1){
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])){
			echo "<p>Login was succcessful</p>";
		}
		else {
			echo "<p>Invalid username and password</p>";
		}
	}
	else {
		echo "<p>Invalid username and password</p>";
	}