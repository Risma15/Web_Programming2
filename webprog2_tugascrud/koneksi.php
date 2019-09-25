<?php 
	$host    = "localhost";
	$user    = "root";
	$password  = "";
	$db      = "db_datadiri";
	$koneksi = mysqli_connect($host, $user, $password, $db);

	if (mysqli_connect_errno()) {
		echo "Koneksi Database Gagal! : " . mysqli_connect_error();
	}
	
 ?>