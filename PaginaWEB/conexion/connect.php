<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$bd = 'BDIrene';
	
	$conn = new mysqli($host, $user, $pass);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		echo "Connected successfully";
	}
?>