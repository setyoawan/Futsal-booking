<?php 



session_start();
if (!isset($_SESSION['nama']) ) {
  header("location: index.php");


}else {



 ?>





<!DOCTYPE html>
<html>
<head>
	<!--ADMIN IKI TAK DELEH NANG JOBO MERGO FUNGSI LOGOUT E DADI SIJI KARO BERANDA AWAL=================================-->
	<title>Halaman admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


<div class="container">
	
	<div class="row">
		<div class="col text-center">
			<h1>Data Data Internazionale Futsal</h1>
		</div>
	</div>

	

	<div class="row mt-5">
		<div class="col-md col-sm-12 mb-4">

			<div class="card shadow">
				<img class="card-img-top" src="img/g.png">
				<div class="card-body text-center">
					<h5 class="card-title">Member !</h5>
					<p class="card-text">Data seluruh member yang ada di internazionale </p>
					<a class="btn btn-primary" href="admin/member.php">view</a>
				</div>
			</div>

		</div>

		<div class="col-md col-sm-12 mb-4">
			
			<div class="card shadow">
				<img class="card-img-top" src="img/g.png">
				<div class="card-body text-center">
					<h5 class="card-title">Booking !</h5>
					<p class="card-text">Data seluruh pemesanan yang ada di internazionale</p>
					<a class="btn btn-primary" href="admin/booking.php">View</a>
				</div>
			</div>	
		
		</div>

		<div class="col-md col-sm-12 mb-4">
			
			<div class="card shadow">
				<img class="card-img-top" src="img/g.png">
				<div class="card-body text-center">
					<h5 class="card-title">Event !</h5>
					<p class="card-text">Data event yang di selenggarakan</p>
					<a class="btn btn-primary" href="admin/event.php">view</a>
				</div>
			</div>	
		
		</div>

		<div class="col-md col-sm-12 mb-4">
			
			<div class="card shadow">
				<img class="card-img-top" src="img/g.png">
				<div class="card-body text-center">
					<h5 class="card-title">Post Artikel !</h5>
					<p class="card-text">Halaman untuk membuat artikel</p>
					<a class="btn btn-primary" href="artikel/reartikel.php">view</a>
				</div>
			</div>	
		
		</div>

	</div><!--TUTUP ROW-->

	<div class="row mt-4">
		<div class="col text-center">
	<a href="logout.php" class="btn btn-outline-primary ">logout</a>
			</div>
		</div>
	</div>


	




</div>

</body>
</html>


<?php } ?>