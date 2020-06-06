<?php  
session_start();
if(isset($_POST["jawab"])){
	$jawaban = $_POST["jawab"];
	if($jawaban == $_SESSION["hasil"]){
		$_SESSION["score"]+=10;
		header("location: Halaman benar.php");
		exit;
	}else if($jawaban != $_SESSION["hasil"]){
		$_SESSION["lives"]-=1;
		$_SESSION["score"]-=2;
		if($_SESSION["lives"] <= 0){
			echo "Game Over";
			header("location: Halaman akhir.php");
			exit;
		}else if($_SESSION["lives"]>0){
			header("location: Halaman salah.php");
			exit;
		}
	}
}else{
	echo "ra isi";
}

?>