
 <?php
 

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];
	    
	$headers = 'From: setyoawan8@gmail.com>' . "rn"; //bagian ini diganti sesuai dengan email dari pengirim
	@mail($email, $subject, $pesan, $headers.php);
	if(@mail) 
	{
	    echo "

	    <script>
	    alert('pesan anda telah terkirim! ');
	    document.location.href='kontak.php';
	    </script>
	    ";
	    
	}
	else 
	{
	    echo "
	    <script>
	    alert('pesan anda gagal terkirim! ');
	    document.location.href='kontak.php';
	    </script>
	    ";
	}

?>

<?php
/*
$nama=$_POST['nama'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$pesan=$_POST['pesan'];

$to=$email;

$pesan="From:$nama <br />".$pesan;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: setyoawan8@gmail.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
$headers .= 'Cc: setyoawan8@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$pesan,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}

?>




<?php 



include('PHPMailer/class.PHPMailer.php');
include('PHPMailer/class.smtp.php');

$email =>Host 	= "ssl://smtp.gmail.com";
$email =>Mailer = "smtp";
$email =>SMTPAuth = true;



$email ->Username = "setyoawan8@gmail.com";
$email ->Password = "mulyokoawan";
$webmaster_email = "setyoawan8@gmail.com";
$email = "awanprakoso@gmail.com"; // email tujuan kate gawe
$nama = ""
 

*/
 ?>


