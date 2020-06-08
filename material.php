<?php 

session_start();
if (!isset($_SESSION['nama']) ) {
  header("location: index.php");

  
}else {

//TAK GAWE NAMPILNO ARTIKEL
 require 'fungsi.php'; //nampilno artikel


 $jumlahDataPerHalaman = 2;
 $jumlahData = count(query("SELECT * FROM artikel"));
 $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // CEIL DIGUNAKAN UNTUK MEMBULATKAN "SELALU" KEATAS 
 $halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
 $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


 $user = mysqli_query ($konek,"SELECT * FROM artikel LIMIT $awalData, $jumlahDataPerHalaman");


 ?>


<!DOCTYPE html>
  <html>
    <head>
  
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--link css custom-->
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>internazionale futsal
      </title>
    </head>

    <body>

<!--navigasi-->

    <div class="navbar-fixed">
      <nav  class="teal lighten-1">
        <div class="container">
          <div class="nav-wrapper">
            <a href="material.php" class="brand-logo">FCIM</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            
            <ul class="right hide-on-med-and-down">
              <li><a href="booking/booking.php">Booking</a></li>
              <li><a href="event/reevent.php">Event</a></li>
              <li><a href="#tentang kami">Tentang Kami</a></li>
              <li><a href="kontak.php">Hubungi Kami</a></li>
              <li><a href="logout.php">Logout</a></li>

            </ul>
          </div>
        </div>
      </nav>
    </div>


<!--sidebar navigasi-->

     <ul class="sidenav" id="mobile-nav">
        <li><a href="booking/booking.php">Booking</a></li>
        <li><a href="event/reevent.php">Event</a></li>
        <li><a href="#tentang kami">Tentang Kami</a></li>
        <li><a href="kontak.php">Hubungi Kami</a></li>
        <li><a href="logout.php">Logout</a></li>
     </ul>

<!-- slider-->

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/f.png"> <!-- random image -->
          <div class="caption center-align">
            <h3>Internazionale Fair Play game!</h3>
            <h5 class="light grey-text text-lighten-3">Junjung tinggi Sportivitas.</h5>
          </div>
        </li>

        <li>
          <img src="img/h.png"> <!-- random image -->
          <div class="caption left-align">
            <h3>Enjoy your today !</h3>
            <h5 class="light grey-text text-lighten-3">Buktikan kemampuanmu di sini.</h5>
          </div>
        </li>

      </ul>
    </div>

<!-- artikel -->

	<section>
		<div class="container">

		

			<div class="row">	
				<h4 class="center light grey-text text-darken-1">Artikel</h4>	
					
          	

          			<div class="col">
          				<?php foreach ($user as $row ) : ?> 
						<h5><?php echo $row["judul_artikel"]; ?></h5>
              			<p> <?php echo '<em>'.date('j, F Y',strtotime($row['tgl_artikel'])).'</em>'; ?></p>
						<p>	<?php echo $row["isi_artikel"]; ?>	</p>

						<?php endforeach; ?>
		<!-- terbaru-->
						<ul class="pagination center">
						    <?php for ($i = 1; $i <= $jumlahHalaman; $i++ ): ?>
						    <li class=" teal"><a href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
			
			          		<?php endfor; ?>
						 </ul>
						

		<!--KURANGGGGGGGG==================================================================================-->
						     
			          	
					</div>

					


			</div>	

			
		
		</div>
		

	</section>


<!--parallax-->
    <div class="parallax-container">
      
      <div class="parallax"><img src="img/e.jpg"></div>

    </div>


<!-- section -->

    <section id="about" class="about">
    <div class="container">
       
      <div class="row">
         <h4 class="center light grey-text text-darken-1 " id="tentang kami">Tentang kami</h4> 
           <div class="col m6">
             <h5>sejarah internazionale futsal</h5>
             <p align="justify">Internazionale adalah sebuah tempat penyedia lapangan futsal yang terletak di desa lengkong kecamatan lengkong kota nganjuk, internazionale di dirikan oleh seorang bernama Setyo Awan Prakoso di tahun 2011, nama internazionale futsal di gunakan dengan di latarbelakangi sang pendiri adalah seorang fans berat inter milan, salah satu klub raksasa italia yang sudah beberapa kali menjuarai kompetisi domestik Serie A dan liga Champions Eropa. selain menyediakan lapangan untuk keperluan latihan dan sparing, internazionale futsal juga menyewakan lapangan untuk berbagai event.</p>
           </div>  

           <div class="col m6">
            <p>kebersihan</p>
              <div class="progress">
                <div class="determinate blue" style="width: 90%"></div>
              </div>  

            <p>keamanan</p>
              <div class="progress">
                <div class="determinate blue" style="width: 95%"></div>
              </div>
             
             <p>kenyamanan</p>
              <div class="progress">
                <div class="determinate blue" style="width: 95%"></div>
              </div>

           </div>

      </div> 

    </div>

    </section>



<footer class="page-footer teal lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Setyo Awan Prakoso</h5>
                <p class="grey-text text-lighten-4">founder of internazionale futsal</p>
                <a href="https://www.instagram.com/setyo_awan/"><img alt="profil setyo awan prakoso" class="" src="img/aw.jpg" style="width: 25%;height: 25%; border-radius: 5%"></a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Kategori</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="booking/booking.php">Booking</a></li>
                  <li><a class="grey-text text-lighten-3" href="event/reevent.php">Event</a></li>
                  <li><a class="grey-text text-lighten-3" href="#tentang kami">Tentang kami</a></li>
                  <li><a class="grey-text text-lighten-3" href="kontak.php">Hubungi kami</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright internazionale futsal
            <a class="grey-text text-lighten-4 right" href="material.php">internazionale futsal</a>
            </div>
          </div>
</footer>


<!--inialisasi javaScript elemen yang ada di panel javascript-->

    <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav); 


        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 400,
          transition: 600,
          interval: 3000

        });  

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

      </script>
    </body>
  </html>

  <?php } ?>