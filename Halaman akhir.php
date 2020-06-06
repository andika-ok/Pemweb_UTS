<?php  
session_start();

require 'koneksi.php';


if(isset($_POST["lagi"])){
	header("location: index.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Game Telah Berakhir</h1>
	<hr>
	<form method="post" action="">
		<p>Hello, <?= $_SESSION["nama"];?>... Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik</p>
		<p>Score Anda: <?= $_SESSION["score"]; ?></p>
		<button type="submit" name="lagi">Main Lagi</button>

		<?php  		

		if($koneksi->connect_error){
		 	die("Koneksi gagal: ". $koneksi->connect_error);
		}else{
			$nama = $_SESSION['nama'];
			$score = $_SESSION['score'];
			$email = $_SESSION['email'];
			$result = mysqli_query($koneksi, "INSERT INTO tbScore (No, Nama, Score, Email)
				VALUES('', '$nama', $score, '$email')");

				echo "<br>";
				echo "<br>";
				echo "<h1>Hall of Fame</h1>";
				echo "<table border= 1 cellpadding=10 cellspacing=0>";
				echo "<tr>";
					echo "<td> No </td>";
					echo "<td> Nama </td>";
					echo "<td> Score </td>";
				echo "</tr>";

				$dataGame = query("SELECT * FROM tbScore ORDER BY Score DESC");
				$i = 1;
				foreach($dataGame as $row){
					if($i <= 10){
						echo "<tr>";
				echo "<td>".$i."</td>";
				$i++; 
				echo "<td>".$row["Nama"]."</td>";
				echo "<td>".$row["Score"]."</td>";
				echo "</tr>";
					}
				}
				echo "</table>";}
	?>
	</form>
</body>
</html>