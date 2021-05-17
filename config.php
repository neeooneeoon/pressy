<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "xnkv6z01qb70pk3z", "h53rjcmbusna9v8i", "lgt1wvmddd5fu91w");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/');
?>