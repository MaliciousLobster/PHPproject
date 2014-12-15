<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/header.php");
?>
<div class="col-xs-12">
	<h1>Login</h1>
</div>	

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	<div id="login-username" class="col-xs-12">
		<label for="username">Username: </label> <!-- Label for people to input their username -->
		<input type="text" name="username" />
	</div>
	<div id="login-password" class="col-xs-12">
		<label for="password">Password: </label> <!-- Label for people to input their password -->
		<input type="password" name="password" />
	</div>
	<div class="col-xs-12">
		<button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submits the information on the page -->
	</div>
</form>