<?php 

	require 'fungsi.php';

	//ambil data di url 
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	//mengambil langsung index ke 0 nya .elemen pertamanya 

	$user = query ("SELECT * FROM user WHERE id = $id")[0];

	//var_dump($mhs);



	//cek apakah tombol submit sudah di tekan atau belum

	if ( isset($_POST["submit"]) ) {

		//cek apakah data sudah di edit atau belum 
		if ( edit($_POST) > 0) {

			echo "
			<script> 
				alert('data berhasil di ubah');
				document.location.href='member.php';
				
			</script>";
		}else {
			echo "
			<script> 
				alert('data gagal di ubah');
				
			</script>";

		}
	}

?>









<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1>Edit data member</h1>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-md col-sm-12 mb-5">
			<img class="img-fluid" src="../img/i.jpg" style="height: 435px;border-radius: 2%;">		
		</div>
		<div class="col-md col-sm-12">
		<form  method="post" action="">
			<input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
			<label for="username">Nama </label>
			<input class="form-control shadow" type="text" name="username" id="username" required="required" value="<?php echo $user["username"]; ?>"> 
			<br>			
			<label for="klub">Klub </label>
			<input class="form-control shadow" type="text" name="klub" id="klub" required="required" value="<?php echo $user["klub"]; ?>">  
			<br>
			<label for="alamat">Alamat </label>
			<input class="form-control shadow" type="text" name="alamat" id="alamat" required="required" value="<?php echo $user["alamat"]; ?>">
			<br>
			<label for="no ktp">No ktp </label>
			<input class="form-control shadow" type="no ktp" name="no_ktp" id="no ktp" required="required" value="<?php echo $user["no_ktp"]; ?>"> 
			<br>
			<label for="no telepon">No telepon </label>
			<input class="form-control shadow" type="text" name="no_telepon" id="no telepon" required="required" value="<?php echo $user["no_telepon"]; ?>"> 
			<br>
		</div><!-- TUTUP E COL DUWUR-->
	</div>	
		
	<div class="row">
		<div class="col">
			<a href="admin.php" class="btn btn-primary btn-lg">kembali</a>
		</div>
		<div class="col">
			<button class="btn btn-primary btn-lg float-right" type="submit" name="submit">edit data</button>
		</div>
	</div>
	
	</form>
</div><!--TUTUP CONTAINER-->

</body>
</html>