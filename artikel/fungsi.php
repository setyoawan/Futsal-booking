<?php 
 
require '../koneksi.php';



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





function edit() {
	global $konek;

	$id = $_POST["id"];
	$judul = htmlspecialchars($_POST["judul_artikel"]);
	$isi = htmlspecialchars ($_POST["isi_artikel"]);
	$tgl = htmlspecialchars($_POST["tgl_artikel"]);
	
	$query = "UPDATE artikel SET 
		judul_artikel = '$judul',
		isi_artikel ='$isi',
		tgl_artikel = '$tgl'
		WHERE id = $id 
		";

	mysqli_query($konek,$query);

	return mysqli_affected_rows($konek);




}

function hapus ($id) {
	global $konek;

	mysqli_query($konek, "DELETE FROM artikel WHERE id=$id");

	return mysqli_affected_rows($konek);
}

// DIPAKAI =============================================================================
// fungsi untuk mencari data 

function cari ($keyword) {
	$query = "SELECT * FROM artikel WHERE judul_artikel
	 		LIKE '%$keyword%'
	 		OR isi_artikel LIKE '%$keyword%'
	 		OR tgl_artikel LIKE '%$keyword%'
	 		
	 		
	 		";

	return query ($query);





}

 ?>