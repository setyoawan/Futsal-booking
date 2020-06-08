<?php 

	require 'fungsi.php';

	//ambil data di url 
	$id = $_GET["id"];

	//query data artikel berdasarkan id
	//mengambil langsung index ke 0 nya .elemen pertamanya 

	$user = query("SELECT * FROM artikel WHERE id = $id")[0];
	//query manggil di function query
	



	//cek apakah tombol submit sudah di tekan atau belum

	if ( isset($_POST["submit"]) ) {

		//cek apakah data sudah di edit atau belum 
		if ( edit($_POST) > 0) {

			echo "
			<script> 
				alert('data berhasil di ubah');
				document.location.href ='reedit.php';
			</script>";
		}else {
			echo "
			<script> 
				alert('data gagal di ubah');
				document.location.href ='reedit.php';
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
			<h1>Halaman edit data artikel!</h1>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col">
			<form  method="post" action="">

			<input type="hidden" name="id" value="<?php echo $user["id"]; ?>">

			<label for="judul">Judul </label>
			<input class="form-control shadow" type="text" name="judul_artikel" id="judul" required="required" value="<?php echo $user["judul_artikel"]; ?>"> 
			<br>
			
			<label for="isi artikel">isi artikel </label>
			<textarea class="form-control shadow" type="text" name="isi_artikel" id="isi artikel" style="height: 400px;"><?php echo $user["isi_artikel"]; ?></textarea>
			<br>

			<label for="tgl_artikel"> tanggal artikel</label>
			<input class="form-control" type="text" name="tgl_artikel" id="tgl_artikel" value="<?php echo $user["tgl_artikel"]; ?>">

		</div><!--tutup COL-->
	</div><!--tutup row-->
		
	<div class="row mt-2">

		<div class="col">
			<a class="btn btn-primary float-left" href="reedit.php">kembali</a>
		</div>

		<div class="col">
			<button class="btn btn-primary	 float-right" type="submit" name="submit">edit data</button>
		</div>

	</div>
	</form>
</div><!--TUTUP CONTAINER-->


</body>
</html>