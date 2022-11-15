<?php 
	session_start();

	// connect to database
	$conn = mysqli_connect("yt9.h.filess.io:3307", "pressy_flyremain", "024d785ebf45f476355608fecbaa85631e55c308", "pressy_flyremain");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://pressy-dbms.herokuapp.com/');
?>
