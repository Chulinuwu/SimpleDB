<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "Depart_store";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}
?>