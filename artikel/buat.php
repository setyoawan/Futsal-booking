

<!DOCTYPE html>
<html>
<head>
	<title>posting artikel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<div class="row mt-4">
		<div class="col text-center">
			<h4>form untuk membuat artikel</h4>
		</div>
	</div>
	<div class="row mt-5">
	
		<div class="col-md col-sm-12 shadow">
			<img class="img-fluid" src="../img/g.png" style="height: 500px;">
		</div>
	
		<div class="col-md col-sm-12">
		<form method="post" action="submit.php">
			<label for="judul_artikel">Judul Artikel</label>
			<input class="form-control shadow" type="text" name="judul_artikel" required="required" id="judul_artikel"><br>
			
			<label for="isi_artikel">Isi Artikel</label> 
			<textarea class="form-control shadow" name="isi_artikel" required="required" id="isi_artikel" style="height: 315px;"></textarea><br>
			
			<a class="btn btn-primary float-left" href="reartikel.php">kembali</a>
			<button class="btn btn-primary float-right" name="submit" type="submit">Buat</button>

		</form>
		</div>
	</div>
</div>




</body>
</html>



