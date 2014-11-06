<?php
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //filters input recieved from a post that is being submitted to the file. Makes sure that it's a string.

	echo "<p>Title: $title</p>"; //echos input
	echo "<p>Post: $post</p>"; //echos input