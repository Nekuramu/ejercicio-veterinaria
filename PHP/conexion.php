<?php 
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$db="veterinaria";

	// Create connection
	try {
		$conn = mysqli_connect($servername, $username, $password,$db);
	} 
	catch (Exception $e) {
		die("Connection failed: " . mysqli_connect_error());
		exit;
	}
	
?>