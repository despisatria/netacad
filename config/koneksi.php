<?php 
	$host		= "localhost";
	$user		= "root";
	$pass		= "";
	$db			= "netacad";

	$koneksi = mysqli_connect($host, $user, $pass, $db); // Koneksi ka database

	if (mysqli_connect_errno()){
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	
?>