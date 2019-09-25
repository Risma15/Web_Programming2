<!DOCTYPE html>
<html>
<head>
	<title>Tugas Web Programming 2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-dark" style="background-color: #708090;">
	  <a class="navbar-brand" href="index.php">CRUD DATA</a>
	</nav>
	<div class="w-75 p-3 mx-auto bg-light">
		<table class="table table-striped">
		    <a href="tambah.php" style="font-size: 20px"><img src="add.png" width="32" height="32" /> TAMBAH DATA</a>
		    <br/>
		    <br/>
		  	<thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Username</th>
		      <th scope="col">Password</th>
		      <th scope="col">Email</th>
		      <th scope="col">Opsi</th>
		    </tr>
			</thead>
			<tbody>
		  	<?php  
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi, "SELECT * FROM tb_data");
				while ($dt = mysqli_fetch_array($data)) {
				?>
		    <tr>
		    	<td><?php echo $no++; ?></td>
					<td><?php echo $dt ['Nama']; ?></td>
					<td><?php echo $dt ['Username']; ?></td>
					<td><?php echo $dt ['Password']; ?></td>
					<td><?php echo $dt ['Email']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $dt['Id']; ?>"><img src="edit2.png"/> EDIT</a>
						<a href="aksi_hapus.php?id=<?php echo $dt['Id']; ?>"><img src="remove.png"/> HAPUS</a>
					</td>
			</tr>
			<?php 
			}

			 ?>
	 		</tbody>
		</table>
	</div>

</body>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>