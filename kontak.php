



<!DOCTYPE html>
<html>
<head>
	<title>hubungi kami</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col text-center">
			<h3>Hubungi kami</h3>
		</div>
	</div>

	<div class="row mt-5 justify-content-center">
		
		<div class="col-md-4 col-sm-12">
			<div class="card shadow text-white bg-primary">
				<div class="card-body text-center">
					<h5 class="card-title">Hubungi kami</h5>
					<p class="card-text">kirim saran dan kritik kepada kami tentang fasilitas yang ada di internazionale futsal, kritik dan saran anda akan sangat membantu kami dalam membangun internzaionale menjadi yang lebih baik</p>
				</div>	 
			</div>
			<ul class="list-group shadow text-center">
				<li class="list-group-item"><h3>Alamat</h3></li>
				<li class="list-group-item">Jl Rimba mulya lengkong</li>
				<li class="list-group-item">Nganjuk Jawa timur Indonesia</li>
				
				<li class="list-group-item"><h3>Setyo Awan Prakoso</h3></li>		
			</ul>
		</div>

		<div class="col-md-6 col-sm-12">
			<form  method="post" action="kirim.php">
			<label for="nama">Nama </label>
			<input class="form-control shadow" type="text" name="nama" id="nama" required="required"> 
			<br>
			<label for="email">Email </label>
			<input class="form-control shadow" type="text" name="email" id="email" required="required">  
			<br>
			<label for="subject">Subject </label>
			<input class="form-control shadow" type="subject" name="subject" id="subject" required="required">
			<br>
			<label for="pesan"> pesan </label>
			<textarea class="form-control shadow" name="pesan" id="pesan" required="required"></textarea>
			<br>
			<button class="btn btn-primary float-right" type="submit" name="kirim">kirim pesan</button>
			<a class="btn btn-primary float-left" href="material.php">kembali</a>
		</div>
	</div>
</div>



</body>
</html>