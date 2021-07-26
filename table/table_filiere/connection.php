<?php
	
	//connexion au BD "mydatabase"
	$conn = new mysqli('localhost', 'root', '', 'statix_db');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
?>