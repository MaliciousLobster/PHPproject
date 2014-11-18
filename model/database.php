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
		public function openConnection() { //a function is a special block of code that can be used to run operations whenever you want.
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			if($this->connection->connect_error){			//accessing a property called 'connect_error', checking for a connection error
				die("error:" . $connection->connect_error);		//if there's an error it will kill the program & tell the user what the error was
			}
		}
		public function closeConnection() {
			if(isset($this->connection)){ //checks whether or not there is information inside of the variable.
				$this->connection->close();
			}

		}
		public function query($string) {
			$this->openConnection(); //opens the connection

			$query = $this->connection->query($string); //allows us to create a query and store it in $query

			$this->closeConnection(); //closes connection

			return $query;
		}
	}