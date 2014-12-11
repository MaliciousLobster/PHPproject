<?php
	require_once(__DIR__ . "/../model/config.php");


	//checks to see if the user is logged in
	function authenticateUser() {
		if(!isset($_SESSION["authenticated"])) { //checks to see if a value is stored in the _SESSIONx variable authenticated
			return false;
		}
		else {
			if($_SESSION["authenticated"] != true) { //checks to see if the variable is true

			}
			else {
				return true;
			}
		}
	}