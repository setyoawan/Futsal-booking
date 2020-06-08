<?php 

$konek = mysqli_connect('localhost','root','','futsal');

?>


<!DOCTYPE html>
<html>
<head>
	<title>data member</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="material.css">
</head>
<body class="background">
<div class="container">
	<h1>Tambah data member</h1>
	<form method="post" action="">
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
		<input class="form-control shadow" type="no ktp" name="no_ktp" id="no ktp" required="required"> 
		<br>

		<label for="no telepon">No telepon </label>
		<input class="form-control shadow" type="text" name="no_telepon" id="no telepon" required="required"> 
		<br>
		<label for="password">password</label>
		<input class="form-control shadow" type="password" name="password" id="password" required="required"> 
		<br>
	<div class="row">
		<div class="col md-3">
			<a href="member.php" class="btn btn-primary btn-lg">kembali</a>
		</div>

		<div class="col md-3 ">
			<button class="btn btn-primary btn-lg float-right" type="submit" name="submit">Tambah data</button>
		</div>
	</div>
	</form>

</div>

<?php 
	// CARA YUSRON INI 

 	@$nama = $_POST['nama'];
 	@$klub = $_POST['klub'];
 	@$alamat = $_POST['alamat'];
 	@$ktp = $_POST['no_ktp'];
 	@$telepon = $_POST['no_telepon'];
 	@$password = $_POST['password'];


 	if (isset($nama, $klub) ) {
 		# code...
 		$tambah = mysqli_query($konek, "INSERT INTO user VALUES ('','$nama','$klub','$alamat','$ktp','$telepon',md5('$password') ); ");

 		if ($tambah > 0 ) {
 			# code...
 			echo "
	 			<script>
	 			alert ('data berhasil ditambahkan');
	 			document.location.href ='../admin.php';
	 			</script>

 			";
 		}else {

 			echo "
	 			<script>
	 			alert ('data gagal ditambahkan');
	 			document.location.href ='../admin.php';
	 			</script>

 			";

 		}

 		$daftarakun = mysqli_query ($konek,"INSERT INTO akun VALUES ('','$nama', md5('$password'),'user'); "); 		
 	}
 	?>

</body>
</html>