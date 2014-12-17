<div id="posts" class="container">
	<div class="row">
<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config.php

	$query = "SELECT  title, post, DateTime FROM posts ORDER BY id DESC"; //query grabs the title, post, and DateTIme from the table posts in descending order
	$result = $_SESSION["connection"]->query($query); 


	if($result){ //if $result has information it will display it
		while($row = mysqli_fetch_array($result)){ //mysqli_fetch_array returns an array that corresponds to the fetched row
			str_split($row["post"], strlen($row["post"]) / 4);
			echo "<div id='read-post' class='post col-xs-8'>";
			echo "<h2>" . $row["title"] . "</h2>";
			echo "<p>" .  $row["DateTime"] . "</p>";
			echo "<p id='post-create'>" . $row["post"] . "</p>";
			echo "<br>";
			echo "</div>";
		}
	}

?>

	<!-- </div>
	<div class="row"> -->
		<div id="about" class="col-xs-3">
			<h1>My Blog</h1>
			<img src="CSS/Images/Me.jpg" alt="Me" class="circle">
			<p id="line"></p>
			<p id="aboutp">This is a project for my 4th period APP Academy class. This project was interesting and it was fun
			tweaking and messing with everything while I made it. </p>
		</div>
	</div>
</div>
