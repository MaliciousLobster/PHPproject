<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config.php

	$query = "SELECT * FROM posts"; //sets query equal to all of the posts from the table
	$result = $_SESSION["connection"]->query($query); 

	if($result){ //if $result has information it will display it
		while($row = mysqli_fetch_array($result)){
			echo "<div class='post'>";
			echo "<h2>" . $row["title"] . "</h2>";
			echo "<br>";
			echo "<p>" . $row["post"] . "</p>";
			echo "<br>";
			echo "</div>";
		}
	}