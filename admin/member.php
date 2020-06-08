<?php 

	require 'fungsi.php';

	$user = query ("SELECT * FROM user");

	// CARA TUTORIAL : KETIKA TOMBOL CARI DI TEKAN AKAN MELAKUKAN FUNGSI
 
	if (isset($_POST["cari"]) ) {
		# code...
		$user = cari($_POST["keyword"]);
	
	}

	
	
	


 ?>





<!DOCTYPE html>
<html>
<head>
	<title>data user</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
	<div class="container">
		<div class="row mt-4">
			<div class="col">
				<h1>Data member Internazionale</h1>
			</div>
			<div class="col">
				<a href="../admin.php" class="btn btn-outline-primary float-right">kembali</a>
			</div>
		</div>	
		<div class="row mt-5">
			<div class="col">
				<a href="tambah.php" class="btn btn-primary">Tambah data user</a>
			</div>
			<div class="col">
				<form class="form-inline float-right" action="" method="post">
				<div class="form-group">
					<input class="form-control" type="text" name="keyword" autofocus="" autocomplete="off" width="200px;">
				</div>	
				<button class="btn btn-primary ml-2 " type="submit" name="cari">
					cari
				</button>
				</form>
			</div>
		</div>
		<br>

		<table class="table table-hover" border="1" cellpadding="10" cellspacing="0">
			<thead class="thead-dark">
			<tr>
				<th>No.</th>
				<th>Aksi</th>
				<th>Nama</th>
				<th>Klub</th>
				<th>Alamat</th>
				<th>No ktp</th>
				<th>No telepon</th>
			</tr>
			</thead>
			<?php $i=1; ?>
			<?php foreach ($user as $row ) : ?> 
			<tr>
				<th><?php echo $i; ?></th>
				<td>
					<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a> |
					<a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin ingin menghapus data');">Hapus</a>
				</td>
				<td><?php echo $row["username"]; ?></td>
				<td><?php echo $row["klub"]; ?></td>
				<td><?php echo $row["alamat"]; ?></td>
				<td><?php echo $row["no_ktp"]; ?></td>
				<td><?php echo $row["no_telepon"]; ?></td>	
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
</div>
</body>
</html>