<?php  
	session_start();
	include 'koneksi.php';

	$nama			= $_POST['nama'];
	$nim      = $_POST['nim'];
	$password = $_POST['password'];
	$level		= 1;

	$daftar = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$nim', '$password', '$nama', '$level')");

	header("location:../index.php");
?>
