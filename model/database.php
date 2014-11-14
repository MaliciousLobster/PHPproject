<?php
	class Database { //these variables are private, which means they cannot be modified outside of this file. 
		private $connection; // The class allows us to make a new instance of an object to store several values inside of which can be accessed
		private $host;      // through pathways. This makes it easier to use variables in our code.
		private $username;
		private $password;
		private $database;

		public function __construct($host, $username, $password, $database) { //these are local variables, their info goes away after it's used, this function
			$this->host = $host;											 // makes them not go disappear. allows them to be global.
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;

		}
		public function openConnection() {

		}
		public function closeConnection() {

		}
		public function query($string) {

		}
	}