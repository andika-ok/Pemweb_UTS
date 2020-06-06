<?php  
session_start();

$_SESSION["lives"] = 5;
$_SESSION["score"] = 0;
if(isset($_POST['jawab'])){
	unset($_SESSION["nama"]);
}

if(isset($_POST["nama"])){
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['email'] = $_POST['email'];
	echo $_SESSION["nama"];
	header("location: Halaman game.php");
	exit;
}
if(!empty($_SESSION['nama'])){
	header("location: Sambut.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pertama</title>
</head>
<body>	
	<h1>Selamat Datang di MyGame</h1>
	<hr>
		
	<form method="post" action="" style="padding-top: 15px;">
		Masukkan Nama :<input type="text" name="nama" style="margin: 0 0 5px 50px;"><br>
		Masukkan Email :<input type="Email" name="email" style="margin: 0 0 5px 50px;"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>