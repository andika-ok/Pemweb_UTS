<?php  
session_start();
if(isset($_POST['ulang'])){
	session_destroy();
	header("location: index.php");
	exit;
}else if(isset($_POST['start'])){
	header("location: Halaman game.php");
	exit;
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
	<form method="post" action="">
		Hallo <?= $_SESSION['nama']; ?>, selamat datang kembali di permainan ini!!! <br><br>
		<input type="submit" name="start" value="Start Game"><br><br>
		Bukan Anda ? 
		<input type="submit" name="ulang" value="klik disini">
	</form>
</body>
</html>