
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
	$penyelenggara = htmlspecialchars($_POST["penyelenggara"]);
	$alamat = htmlspecialchars ($_POST["alamat"]);
	$notelepon = htmlspecialchars ($_POST["no_telepon"]);
	$namaevent = htmlspecialchars ($_POST["nama_event"]);
	$hadiah = htmlspecialchars ($_POST["hadiah"]);
	$deskripsi = htmlspecialchars ($_POST["deskripsi"]);
	$tanggal = $_POST ["tanggal"];
	$bulan = $_POST ["bulan"];
	$tahun = $_POST ["tahun"];
	
	$pelaksanaan = $tahun."-".$bulan."-".$tanggal;

	$jam = $_POST ["jam"];

	$query = "UPDATE event SET 
		penyelenggara = '$penyelenggara',
		alamat ='$alamat',
		no_telepon='$notelepon',
		nama_event='$namaevent',
		hadiah= '$hadiah',
		deskripsi= '$deskripsi',
		pelaksanaan ='$pelaksanaan',
		jam ='$jam'
		WHERE id = $id 
		";
		
		//query ambil dari variable di atas	

	$edit = mysqli_query($konek, "SELECT * FROM event WHERE jam = '$jam' AND waktu='$waktu';");


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






//FUNGSI BUAT DIGAWEE =================== 

function buat ($data) {
	global $konek;


	// CARA TUTORIAL INI ============

 	@$penyelenggara = $data['penyelenggara'];
 	@$alamat = $data['alamat'];
 	@$notelepon = $data['no_telepon'];
 	@$namaevent = $data['nama_event'];
 	@$hadiah = $data['hadiah'];
 	@$deskripsi = $data ["deskripsi"];

 	@$tanggal = $data ["tanggal"];
	@$bulan = $data ["bulan"];
	@$tahun = $data ["tahun"];
	
	$waktu = $tahun."-".$bulan."-".$tanggal;

	@$jam = $data ["jam"];



	$buat = mysqli_query($konek, "SELECT * FROM event WHERE jam = '$jam' AND pelaksanaan='$waktu';");

	if (mysqli_fetch_assoc ($buat) ) {
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
 	mysqli_query ($konek, "INSERT INTO event VALUES ('','$penyelenggara','$alamat','$notelepon','$namaevent','$hadiah','$deskripsi','$waktu','$jam') ");

 	return mysqli_affected_rows ($konek);
 	
}

//FUNGSI CARI DI GAWEEE =================== 

function cari ($keyword) {
	$query = "SELECT * FROM event WHERE penyelenggara
	 		LIKE '%$keyword%'
	 		OR alamat LIKE '%$keyword%'
	 		OR no_telepon LIKE '%$keyword%'
	 		OR nama_event LIKE '%$keyword%'
	 		OR hadiah LIKE '%$keyword%'
	 		OR deskripsi LIKE '%$keyword%'
	 		OR pelaksanaan LIKE '%$keyword%'
	 		OR jam LIKE '%$keyword%'

	 		";

	return query ($query);





}




 ?>