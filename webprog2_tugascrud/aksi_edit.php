<?php 
include 'koneksi.php';

	$id = $_POST['Id'];
	$nama = $_POST['Nama'];
	$username = $_POST['Username'];
	$passwd = $_POST['Password'];
	$email = $_POST['Email'];

	mysqli_query($koneksi, "UPDATE tb_data SET Nama='$nama', Username='$username', Password='$passwd', Email='$email' where Id='$id'");

	header("location:index.php")
 ?>