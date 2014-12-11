<?php
	require_once(__DIR__ . "/../model/config.php"); //uses code from config.php
	require_once(__DIR__ . "/../controller/login-verify.php"); //takes code from login-verify.php

	if(!authenticateUser()) { //if the user is not logged in it kills the program and redirects the user back to index.php
		header("Location: " . $path . "index.php");
		die();
	}
?>
<div class="sticky container">
	<div class="row">
		<div class="col-xs-12">
			<nav>
				<ul>
					<li><a href="<?php  echo "$path" . "post.php" ?>">Blog Post Form</a></li><!-- /*creates a link to post.php through index.php*/ -->
					<li><a href="<?php  echo "$path" . "login.php" ?>">Login</a></li>
					<li><a href="<?php  echo "$path" . "register.php" ?>">Register</a></li> 
				</ul>	
			</nav>
		</div>
	</div>
</div>