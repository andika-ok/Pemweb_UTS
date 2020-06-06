<?php  
session_start();
if(!isset($_SESSION['nama'])){
	header("Location: index.php");
	exit;
}
$rand1 = rand(0, 20);
$rand2 = rand(0, 20);
$_SESSION["hasil"] = $rand1+$rand2;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Selamat Mengerjakan game MyGame</h1>
	<hr>
	<form method="post" action="Proses.php">
		<p>Hello <?= $_SESSION["nama"];  ?>, tetap semangat ya... you can do the best!!</p>
		<p>Lives: <?= $_SESSION["lives"]; ?> | Score: <?= $_SESSION["score"];  ?></p>
		<p>Berapakah <?= $rand1; ?> + <?= $rand2; ?> <input type="text" name="jawab" autocomplete="off"> <input type="submit" name="submit"></p>
	</form>
</body>
</html>