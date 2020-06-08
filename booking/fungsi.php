
<?php 

require '../koneksi.php';


// FILE BOOKING==========================================================================================================
 
//fungsi query
function query ($query) {
	global $konek;

	$result = mysqli_query ($konek, $query);
	$rows = [];
	while ( $row  = mysqli_fetch_assoc($result) ) {
	 	# code...

	 	$rows[] = $row;

	 } 
	 return $rows;
}


// FUNGSI EDIT ==================SEPERTINYA KALO UPDATE HARUS PAKAI $_POST SUPAYA BERHASIL DAN TERNYATA BENAR HAHHA
function edit() {
	global $konek;

	$id = $_POST["id"];
	$nama = htmlspecialchars($_POST["username"]);
	$klub = htmlspecialchars ($_POST["klub"]);
	$alamat = htmlspecialchars ($_POST["alamat"]);
	$ktp = htmlspecialchars ($_POST["no_ktp"]);
	$telepon = htmlspecialchars ($_POST["no_telepon"]);
	$tanggal = $_POST ["tanggal"];
	$bulan = $_POST ["bulan"];
	$tahun = $_POST ["tahun"];
	
	$waktu = $tahun."-".$bulan."-".$tanggal;

	$jam = $_POST ["jam"];

	$query = "UPDATE booking SET 
		username = '$nama',
		klub ='$klub',
		alamat='$alamat',
		no_ktp='$ktp',
		no_telepon= '$telepon',
		waktu ='$waktu',
		jam ='$jam'
		WHERE id = $id 
		";
		
		//query ambil dari variable di atas	

	$edit = mysqli_query($konek, "SELECT * FROM booking WHERE jam = '$jam' AND waktu='$waktu';");


	if (mysqli_fetch_assoc($edit) ) {
		# code...
		echo "
		<script>
		alert('waktu yang anda pilih sudah di pesan! ')
		document.location.href='reedit.php'
		</script>
		";
		return false;
	}
	//CEK APAKAH JAM YANG DI EDIT SUDAH DI PESAN ATAU GURUNGG
	mysqli_query($konek,$query);

	return mysqli_affected_rows($konek);

	

}






//FUNGSI BOOKING DIGAWEE =================== 

function booking ($data) {
	global $konek;


	// CARA TUTORIAL INI ============

 	@$nama = $data['username'];
 	@$klub = $data['klub'];
 	@$alamat = $data['alamat'];
 	@$ktp = $data['no_ktp'];
 	@$telepon = $data['no_telepon'];
 	
 	@$tanggal = $data ["tanggal"];
	@$bulan = $data ["bulan"];
	@$tahun = $data ["tahun"];
	
	$waktu = $tahun."-".$bulan."-".$tanggal;

	@$jam = $data ["jam"];



	$booking = mysqli_query($konek, "SELECT * FROM booking WHERE jam = '$jam' AND waktu='$waktu';");

	if (mysqli_fetch_assoc($booking) ) {
		# code...
		echo "
		<script>
		alert('waktu yang anda pilih sudah di pesan! ')
		document.location.href='lihat.php'
		</script>
		";
		return false;
	}

	//tambahkan pemesanan ke database booking
 	mysqli_query ($konek, "INSERT INTO booking VALUES ('','$nama','$klub','$alamat','$ktp','$telepon','$waktu','$jam') ");

 	return mysqli_affected_rows ($konek);
 	
}

//FUNGSI CARI DI GAWEEE =================== 

function cari ($keyword) {
	$query = "SELECT * FROM booking WHERE username
	 		LIKE '%$keyword%'
	 		OR klub LIKE '%$keyword%'
	 		OR alamat LIKE '%$keyword%'
	 		OR no_ktp LIKE '%$keyword%'
	 		OR no_telepon LIKE '%$keyword%'
	 		OR waktu LIKE '%$keyword%'
	 		OR jam LIKE '%$keyword%'
	 		
	 		";

	return query ($query);





}




 ?>