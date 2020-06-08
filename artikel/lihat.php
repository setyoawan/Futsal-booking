<?php 

	
require 'fungsi.php';

$user = query ("SELECT * FROM artikel");
	
	//cari  ========================
	//tombol cari ketika di tekan 
	if (isset($_POST["cari"]) ) {
		# code...
		$user = cari($_POST["keyword"]);
	
	}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>daftar postingan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
	<div class="container">
		<div class="row mt-3">
			<div class="col text-center">
				<h1>Daftar Postingan</h1>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col">
				<a href="reartikel.php" class="btn btn-primary">kembali</a>
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
				<th>Judul</th>
				<th>isi</th>
				<th>Tanggal Pembuatan</th>
				
			</tr>
			</thead>

			<?php $i=1; ?>
			<?php foreach ($user as $row ) : ?> 
			<tr>

				<th><?php echo $i; ?></th>
				<td><?php echo $row["judul_artikel"]; ?></td>
				<td><?php echo $row["isi_artikel"]; ?></td>
				<td><?php echo $row["tgl_artikel"]; ?></td>	
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
</div>


</body>
</html>