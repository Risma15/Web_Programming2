<!DOCTYPE html>
<html>
<head>
	<title>Tugas Web Programming 2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark" style="background-color: #708090;">
	  <a class="navbar-brand" href="#">CRUD DATA</a>
	</nav>
	<div class="w-75 p-3 mx-auto bg-light">
		<h3 style="text-align: center; border: groove;">FORM TAMBAH DATA</h3>
		<form method="post" action="aksi_tambah.php">
			<div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="Nama" required="">
			</div>
			<div class="form-group">
			    <label for="inputAddress">Username</label>
			    <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="Username" required="">
			</div>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="Email" required="">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="Password" required="">
			    </div>
			</div>
			<button type="submit" class="btn btn-dark"><img src="save.png" width="31" height="31" /> SIMPAN</button>
			<button class="btn btn-dark"><a href="index.php"><img src="Delete_01.png"/> BATAL</a></button>
		</form>
	</div>

</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>