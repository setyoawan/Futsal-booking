<?php 
// UNTUK PASSWORD SUDAH DI SET MD5 JIKA MENGGUNAKAN "PASSWORD_HASH" MAKA USER ATAU ADMIN GAGAL MASUK SISTEM. 

if (isset($_SESSION['nama']) ) {
	


}else {

session_start();

require 'fungsi.php';





 ?>




<!DOCTYPE html>
<html>
<head>
	<title>internazionale futsal</title>	
	<link rel="stylesheet" type="text/css" href="material.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body >


<div class="container bg-light pb-4">

<!--ngatur manual di akali-->
	<div class="row">
		<div class="col">&nbsp</div>
	</div>	

	<div class="row">
		<div class="col">&nbsp</div>
	</div>

	<div class="row">
		<div class="col">&nbsp</div>
	</div>	

	<div class="row">
		<div class="col">&nbsp</div>
	</div>	

	<div class="row">
		<div class="col"></div>
	</div>	


	<div class="row pb-3">
		<div class="col text-center">
			<h3>Form login!</h3>
		</div>	
	</div>

	<div class="row">
		<div class="col"></div>

		<div class="col">
			<img class="img-fluid" src="img/ft.jpg" style="border-radius: 5px;">
		</div>

		<div class="col"></div>	
	</div>

	<div class="row">
		<div class="col"></div>

		<div class="col">
		<form method="post" action="">
			<label for="username">username</label>
			<input class="form-control" type="text" name="username" id="username" placeholder="masukkan username" required="required" autocomplete="off">

			<label for="password">password</label>
			<input class="form-control" type="password" name="password" id="password" placeholder="masukkan password" required="required">
			<br>

			<input class="btn btn-primary float-left" type="submit" name="submit]" value="masuk">

			<label class="float-left" style="padding-top: 6px;">belum punya akun ?? klik <a href="daftar.php">disini </a> untuk mendaftar</label>
		</form>
		</div>

		<div class="col"></div>
		
	</div><!--ROW FORM-->


<!--ngatur manual di akali-->

	<div class="row">
		<div class="col">&nbsp</div>
	</div>	

	<div class="row">
		<div class="col">&nbsp</div>
	</div>

	<div class="row">
		<div class="col">&nbsp</div>
	</div>	

	<div class="row">
		<div class="col">&nbsp</div>
	</div>

	<div class="row">
		<div class="col">&nbsp</div>
	</div>

	<div class="row">
		<div class="col">&nbsp</div>
	</div>

	<div class="row">
		<div class="col"></div>
	</div>

	


	



</div><!--conatiner-->


<?php 


	@$user = $_POST["username"];
 	@$pass = md5 ($_POST["password"]);


 	if (isset($user,$pass)) {
 		# code...

 		//cek username dan password
 		$login = mysqli_query($konek, "SELECT * FROM akun WHERE username ='$user' and password ='$pass';");

 		$cekdata = mysqli_num_rows ($login);

 		if ($cekdata>0) {
 			# code...
 			echo "berhasil <br>";
 			$ceklevel = mysqli_fetch_assoc ($login);

 			if ($ceklevel['hak_akses']=='admin') {
 				
 				$_SESSION ['nama'] = $ceklevel ['username'];
				header("location: admin.php");

 			}elseif ($ceklevel['hak_akses']=='user') {
 				$_SESSION ['nama'] = $ceklevel ['username'];
 				header("location: material.php");
 			}




 		}else {
 			echo "
 			<script>
 			alert('gagal masuk klik daftar untuk mendaftar!');
 			</script>
 			";
 		
 		}

 	}



 ?>

</body>
</html>
<?php } ?>