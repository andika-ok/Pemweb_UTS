<?php  
session_start();
if(isset($_POST["next"])){
	header("location: Halaman game.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Mengerjakan game MyGame</h1>
	<hr>
	<form method="post" action="Halaman game.php">
		<p>Hello <?= $_SESSION["nama"]; ?>, Selamat jawaban Anda benar</p>
		<p>Lives: <?= $_SESSION["lives"]; ?> | Score: <?= $_SESSION["score"];  ?></p>
		<button name="next">Soal selanjutnya</button>
	</form>
</body>
</html>