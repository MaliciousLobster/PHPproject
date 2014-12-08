<?php
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //filters input that is passed to the file, FILTER_SANITIZE_EMAIL makes the input display as a string and gets rid of any non-emial related characters
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); //filters input that is passed to the file, FILTER_SANITIZE_STRING makes the value display as a string
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); //filters input that is passed to the file, FILTER_SANITIZE_STRING makes the value display as a string

	echo $password;

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$"; //creating a salt variable, running a password encrypter 5000 times, then creating a unique id and making sure it is random

	echo $salt;	