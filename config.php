<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "c0d21bqza09enytv", "khnqoqquzjuyretd", "ou55ukpn13x8i4gt");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://pressy-dbms.herokuapp.com/');
?>