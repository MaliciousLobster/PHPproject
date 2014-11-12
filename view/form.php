<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path ."controller/create-post.php"; ?>"> <!-- links post.php to form.php -->
	<div>
		<label for="title">Title: </label> <!-- inputs text for 'Title' in the table -->
		<input type="text" name="title"/> <!-- makes the input a text type -->
	</div>
	<div>
		<label for "post">Post: </label> <!-- inputs text for 'Post' in the table -->
		<textarea name="post"></textarea> <!-- creates a text area -->
	</div>
	<div>
		<button type="submit">Submit</button> <!-- basically refreshes page for now.. -->
	</div>
</form>