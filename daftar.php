<?php 

	require 'fungsi.php';

	// CARA TUTORIALL ============
	if (isset($_POST["submit"])) {
		# code...

	if (daftar($_POST) > 0) {
		# code...

		echo "
		<script> 
		alert('user baru berhasil di tambahkan !');

		</script>";
	}else {
	echo  mysqli_error($konek);

	}


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>daftar akun</title>	
	<link rel="stylesheet" type="text/css" href="material.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1>Daftar sekarang juga!</h1>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col pt-2">
			<img class="img-fluid" src="img/e.jpg">
		</div>
	</div>

	<div class="row">
		<div class="col pt-2">

			<form  method="post" action="">
			<label for="nama">Nama </label>
			<input class="form-control shadow" type="text" name="nama" id="nama" required="required"> 
			<br>			
			<label for="klub">Klub </label>
			<input class="form-control shadow" type="text" name="klub" id="klub" required="required">  
			<br>
			<label for="alamat">Alamat </label>
			<input class="form-control shadow" type="text" name="alamat" id="alamat" required="required">
			<br>
			<label for="no ktp">No ktp </label>
			<input class="form-control shadow" type="no ktp" name="ktp" id="no ktp" required="required"> 
			<br>
			<label for="no telepon">No telepon </label>
			<input class="form-control shadow" type="text" name="telepon" id="no telepon" required="required"> 
			<br>
			<label for="password">password</label>
			<input class="form-control shadow" type="password" name="password" id="password" required="required"> 
			<br>
		</div>
	</div>
		<div class="row">
			<div class="col">
				<a class="btn btn-primary  float-left" href="index.php">kembali</a>
			</div>
			<div class="col">
				<button class="btn btn-primary float-right" type="submit" name="submit">daftar</button>
			</div>
		</div>
	</form>
</div>

</body>
</html>