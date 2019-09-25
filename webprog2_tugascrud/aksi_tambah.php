<?php 
include 'koneksi.php';

$nama = $_POST['Nama'];
$username = $_POST['Username'];
$passwd = $_POST['Password'];
$email = $_POST['Email'];

mysqli_query($koneksi, "INSERT INTO tb_data VALUES ('','$nama','$username','$passwd','$email')");

header("location:index.php")
 ?>