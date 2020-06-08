<?php 
 
require 'koneksi.php';


// tak gawe ng FILE ADMIN tok ==========================================================================================================

//belum tak pakai (pakai sih sebagian)
//fungsi query
function query ($query) {
	global $konek;

	$result = mysqli_query ($konek, $query);
	$rows = [];
	while ( $row  = mysqli_fetch_assoc($result)) {
	 	# code...

	 	$rows[] = $row;

	 } 
	 return $rows;
}



// wis tak buat di INTERNAL file admin
/*
//fungsi untuk menambah data di database
function tambah($data) {
	global $konek;


	//AMBIL DATA DARI TIAP ELEMEN DALAM FORM
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars ($data["nama"]);
	$jurusan = htmlspecialchars ($data["jurusan"]);
	$email = htmlspecialchars ($data["email"]);
	$alamat = htmlspecialchars ($data["alamat"]);

	//query insert data
	$query ="INSERT INTO mahasiswa VALUES ('','$nrp','$nama','$jurusan','$email','$alamat') ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);
	


}
*/


// belum dipakai
// fungsi untuk mengedit data
/*

function edit() {
	global $konek;

	$id = $_POST["id"];
	$nama = htmlspecialchars($_POST["username"]);
	$klub = htmlspecialchars ($_POST["klub"]);
	$alamat = htmlspecialchars ($_POST["alamat"]);
	$ktp = htmlspecialchars ($_POST["no_ktp"]);
	$telepon = htmlspecialchars ($_POST["no_telepon"]);

	$query = "UPDATE user SET 
		username = '$nama',
		klub ='$klub',
		alamat='$alamat',
		no_ktp='$ktp',
		no_telepon= '$telepon'
		WHERE id = $id 
		";

	mysqli_query($konek,$query);

	return mysqli_affected_rows($konek);




}

// DIPAKAI =============================================================================
// fungsi untuk menhapus data
function hapus ($id) {
	global $konek;

	mysqli_query($konek, "DELETE FROM user WHERE id=$id");

	return mysqli_affected_rows($konek);
}

// DIPAKAI =============================================================================
// fungsi untuk mencari data 

function cari ($keyword) {
	$query = "SELECT * FROM user WHERE username
	 		LIKE '%$keyword%'
	 		OR klub LIKE '%$keyword%'
	 		OR alamat LIKE '%$keyword%'
	 		OR no_ktp LIKE '%$keyword%'
	 		OR no_telepon LIKE '%$keyword%'
	 		
	 		";

	return query ($query);





}
*/

//DIPAKAI ===============================================================================
//fungsi registrasi

function daftar ($data) {
	global $konek;

	$nama = strtolower(stripslashes($_POST ["nama"]));
	$klub = $data ["klub"];
	$alamat = $data ["alamat"];
	$ktp = $data ["ktp"];
	$telepon = $data ["telepon"];
	$password = $data["password"];

	//enckripsi password 
	//md-5 dapat di copy string paste ke google mudah di ketahui.
	//$password =md5($password);

	//$password = password_hash($password, PASSWORD_DEFAULT);
	//var_dump($password); die;
	
	//cek username sudah ada atau belum
	$login = mysqli_query($konek, "SELECT * FROM user WHERE username = '$nama' AND klub='$klub';");

	if (mysqli_fetch_assoc($login) ) {
		# code...
		echo "
		<script>
		alert('akun sudah terdaftar ! ')
		</script>
		";
		return false;
	}


	//tambahkan userbaru ke database user
	mysqli_query($konek, "INSERT INTO user VALUES ('','$nama','$klub','$alamat','$ktp','$telepon',md5('$password') ); ");

	// tambahkan user baru kedalam tabel akun
	mysqli_query ($konek,"INSERT INTO akun VALUES ('','$nama',md5('$password'),'user'); ");

	return mysqli_affected_rows ($konek);


}








 ?>