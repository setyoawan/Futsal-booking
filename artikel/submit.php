<?php 

require 'fungsi.php';
@$judul = $_POST['judul_artikel'];
@$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d-');

$query = mysqli_query($konek,"INSERT INTO artikel VALUES ('','$judul','$isi','$tgl')");


if ($query > 0) {

	echo " 
	<script> 
		alert('artikel berhasil di buat !');
		document.location.href='lihat.php';
		
	</script> 
	" ;
	}
	else
	{
	echo "
	<script> 
		alert(artikel gagal di buat !);
		
	</script> 
	" ;

	}
?>