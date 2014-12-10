
<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config.php

	$query = "SELECT * FROM posts"; //sets query equal to all of the posts from the table
	$result = $_SESSION["connection"]->query($query); 

	if($result){ //if $result has information it will display it
		while($row = mysqli_fetch_array($result)){ //mysqli_fetch_array returns an array that corresponds to the fetched row
			echo "<div id='read-post' class='post col-xs-12 '>";
			echo "<h2>" . $row["title"] . "</h2>";
			echo "<p>" . $row["post"] . "</p>";
			echo "<br>";
			echo "</div>";
		}
	}

?>