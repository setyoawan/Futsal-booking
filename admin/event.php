<?php 


	require 'fungsi.php';

	$user = query ("SELECT * FROM event");
	
	// TAK JENENGI GOLEK luurrr ========================
	//tombol cari ketika di tekan 
	if (isset($_POST["cari"]) ) {
		# code...
		$user = search($_POST["keyword"]);
	
	}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>informasi pemesanan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
	<div class="container">
		<div class="row mt-4">
			<div class="col text-center">
				<h1>Informasi event</h1>
			</div>
		</div>

		
		<div class="row mt-4">
			<div class="col">
				<a href="../admin.php" class="btn btn-primary">kembali</a>
			</div>

			<div class="col">
			<form class="form-inline float-right" action="" method="post">
				<div class="form-group">
					<input class="form-control shadow" type="text" name="keyword" autofocus="" autocomplete="off" width="200px;">
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
				<th>Penyelenggara</th>
				<th>Alamat</th>
				<th>No telepon</th>
				<th>Nama event</th>
				<th>Hadiah</th>
				<th>Deskripsi</th>
				<th>Pelaksanaan</th>
				
			</tr>
			</thead>
			<?php $i=1; ?>
			<?php foreach ($user as $row ) : ?> 
			<tr>
				<th><?= $i; ?></th>
				<td><?= $row["penyelenggara"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<td><?= $row["no_telepon"]; ?></td>
				<td><?= $row["nama_event"]; ?></td>
				<td><?= $row["hadiah"]; ?></td>
				<td><?= $row["deskripsi"]; ?></td>
				<td><?= $row["pelaksanaan"]; ?></td>			
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
</div>
</body>
</html>