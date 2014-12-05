<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/header.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path ."controller/create-user.php"; ?>" > <!-- a place for a user to register -->
	<div>
		<label for="email">Email: </label> <!-- Label for people to input email -->
		<input type="text" name="email" />
	</div>

	<div>
		<label for="username">Username: </label> <!-- Label for people to input their username -->
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label> <!-- Label for people to input their password -->
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submits the information on the page -->
	</div>
</form>