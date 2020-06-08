<?php 

	require 'fungsi.php';

	//ambil data di url 
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	//mengambil langsung index ke 0 nya .elemen pertamanya 

	$user = query("SELECT * FROM event WHERE id = $id")[0];
	//query manggil di function query
	//var_dump($user);



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

<div class="container bg-light pb-4">
		<div class="row">
			<div class="col text-center">
			<h1>Form edit data event!</h1>
			</div>
		</div>

		<div class="row">
			<div class="col">
			<form  method="post" action="">

			<input type="hidden" name="id" value="<?php echo $user["id"]; ?>">

			<label for="penyelenggara">Penyelenggara </label>
			<input class="form-control shadow" type="text" name="penyelenggara" id="penyelenggara" required="required" value="<?php echo $user["penyelenggara"]; ?>"> 
			<br>
			
			<label for="alamat">Alamat </label>
			<input class="form-control shadow" type="text" name="alamat" id="alamat" required="required" value="<?php echo $user["alamat"]; ?>">  
			<br>

			<label for="no_telepon">No telepon </label>
			<input class="form-control shadow" type="text" name="no_telepon" id="no_telepon" required="required" value="<?php echo $user["no_telepon"]; ?>">
			<br>

			<label for="nama_event">Nama event </label>
			<input class="form-control shadow" type="nama_event" name="nama_event" id="nama_event" required="required" value="<?php echo $user["nama_event"]; ?>"> 
			<br>

			<label for="hadiah">Hadiah </label>
			<input class="form-control shadow" type="text" name="hadiah" id="hadiah" required="required" value="<?php echo $user["hadiah"]; ?>"> 
			<br>


			<label for="deskripsi">Deskripsi </label>
			<input class="form-control shadow" type="text" name="deskripsi" id="deskripsi" required="required" value="<?php echo $user["deskripsi"]; ?>"> 
			<br>

			<h4>Tentukan Waktu!</h4>
			<div class="form-inline">
			
				<select class="form-control shadow" name="tanggal" >
					<option selected="selected" value="<?php echo $user["waktu"]; ?>">Tanggal</option>

					<?php 

					$tgl =1;
					$nilai = 1;

					while ( $tgl <= 31  and $nilai <=31 ) {
						# code...
						echo "<option value=$nilai> 
						$nilai </option>";
						$tgl++;
						$nilai++;

					}

					?>
				</select>
				&nbsp

					<select class="form-control shadow" name="bulan" >
					<option selected="selected" value="<?php echo $user["waktu"]; ?>"> Bulan </option>
					<option value="1" > Jan </option>
					<option value="2" > Feb </option>
					<option value="3" > Mar </option>
					<option value="4" > Apr </option>
					<option value="5" > Mei </option>
					<option value="6" > Jun </option>
					<option value="7" > Jul </option>
					<option value="8" > Agu </option>
					<option value="9" > Sep </option>
					<option value="10"> Okt </option>
					<option value="11"> Nov </option>
					<option value="12"> Des </option>
				</select>
				&nbsp
				
				<select class="form-control shadow" name="tahun">
					<option selected="selected" value="<?php echo $user["waktu"]; ?>"> Tahun </option>
					<option value="2018" > 2018 </option>
					<option value="2019" > 2019</option>
					
				</select>
				&nbsp

				<select class="form-control shadow" name="jam">
					<option selected="selected" value="<?php echo $user["jam"]; ?>"> Jam </option>
					<option value="10:00 - 11:00" > 10:00 - 11:00 </option>
					<option value="11:00 - 12:00" > 11:00 - 12:00 </option>
					<option value="12:00 - 13:00" > 12:00 - 13:00 </option>
					<option value="13:00 - 14:00" > 13:00 - 14:00 </option>
					<option value="15:00 - 16:00" > 15:00 - 16:00 </option>
					<option value="16:00 - 17:00" > 16:00 - 17:00 </option>
					<option value="18:00 - 19:00" > 18:00 - 19:00 </option>
					<option value="19:00 - 20:00" > 19:00 - 20:00 </option>
					<option value="20:00 - 21:00" > 20:00 - 21:00 </option>
					<option value="21:00 - 22:00" > 21:00 - 22:00 </option>
					<option value="22:00 - 23:00" > 22:00 - 23:00 </option>
					<option value="23:00 - 00:00" > 23:00 - 00:00 </option>			
				</select>
	
				</div><!--tutup form inline-->
			</div><!--tutup COL-->
		</div><!--tutup row-->
		
	<div class="row mt-2">

		<div class="col">
		<a class="btn btn-primary btn-lg float-left" href="reedit.php">kembali</a>
		</div>

		<div class="col">
		<button class="btn btn-primary btn-lg float-right" type="submit" name="submit">edit data</button>
		</div>

	</div>

	

	</form>


</div><!--TUTUP CONTAINER-->




	




 	 
</body>
</html>