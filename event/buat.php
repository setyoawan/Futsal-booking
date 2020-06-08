<?php 

require 'fungsi.php';

// CARA TUTORIALL ============
	if (isset($_POST["submit"])) {
		# code...

		if (buat ($_POST) > 0) {
			# code...

			echo "
			<script> 
			alert('terimakasih nikmati eventmu disini !');
			document.location.href='lihat.php';
			</script>
			";
		}else {
		echo  mysqli_error($konek);

		}


	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>event internazionale futsal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
		<div class="row mt-4">
			<div class="col text-center">
				<h1>Buat Event Bersama Internazionale futsal</h1>
			</div>
		</div>

	<div class="row mt-5">
		<div class="col">
			<img class="img-fluid" src="../img/g.png" style="height: 530px;">
		</div>

		<div class="col">
		<form  method="post" action="">

		<label for="Penyelenggara">Penyelenggara Event</label>
		<input class="form-control shadow" type="text" name="penyelenggara" id="Penyelenggara" required="required"> 
		<br>
		
		<label for="alamat">Alamat</label>
		<input class="form-control shadow" type="text" name="alamat" id="alamat" required="required">  
		<br>

		<label for="no_telepon">no_telepon</label>
		<input class="form-control shadow" type="text" name="no_telepon" id="no_telepon" required="required"> 
		<br>

		<label for="nama_event">Nama Event</label>
		<input class="form-control shadow" type="text" name="nama_event" id="nama_event" required="required">  
		<br>

		<label for="hadiah">Hadiah</label>
		<input class="form-control shadow" type="text" name="hadiah" id="hadiah" required="required">
		<br>

		<label for="deskripsi">Deskripsi </label>
		<textarea class="form-control shadow" type="text" name="deskripsi" id="deskripsi" required="required"></textarea> 
		<br>

		<h4>Tentukan Waktu dimulai Event!</h4>
		<div class="form-inline">
		
			<select class="form-control shadow" name="tanggal" >
		        <option value="1" selected="selected">Tanggal</option>

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

		    	<select class="form-control" name="bulan" >
		        <option value="1" selected="selected"> Bulan </option>
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
		    
		    <select class="form-control" name="tahun">
		        <option value="1" selected="selected"> Tahun </option>
		        <option value="2018" > 2018 </option>
		        <option value="2019" > 2019 </option>
		    </select>
			&nbsp

			<select class="form-control" name="jam">
		        <option value="1" selected="selected"> Jam </option>
		        <option value="10:00" > 10:00 </option>
		        <option value="11:00" > 11:00</option>
		        <option value="12:00" > 12:00 </option>
		        <option value="13:00" > 13:00 </option>
		        <option value="15:00" > 15:00 </option>
		        <option value="16:00" > 16:00 </option>
		        <option value="18:00" > 18:00 </option>
		        <option value="19:00" > 19:00 </option>
		        <option value="20:00" > 20:00 </option>
		        <option value="21:00" > 21:00 </option>
		        <option value="22:00" > 22:00 </option>
		        <option value="23:00" > 23:00 </option>		        		       
		    </select>

			</div><!--tutup form inline-->	
		</div><!--tutup COL-->
	</div><!--tutup row-->
	
	<div class="row mt-2">
		<div class="col">
			<a class="btn btn-primary float-left" href="reevent.php">kembali</a>
		</div>
		<div class="col">
			<button class="btn btn-primary  float-right" type="submit" name="submit">Buat</button>
		</div>
	</div>
	</form>
</div><!--TUTUP CONTAINER-->


</body>
</html>