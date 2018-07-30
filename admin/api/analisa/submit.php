<?php 
	session_start();
	include_once("../../config/connection.php");
	$tanaman = $_POST['tanaman'];
	$jenis = $_POST['jenis'];
	$ph = $_POST['ph'];
	$suhu = $_POST['suhu'];
	$kedalaman = $_POST['kedalaman'];
	$kelas = $_POST['kelas'];

	$wh = isset($_GET['idAnalisa'])&&!empty($_GET['idAnalisa']) ? "and idAnalisa!=".$_GET['id']:"";
	$check = $db->query("SELECT count(idAnalisa) as total from analisa where idTanaman = '$tanaman' AND idJenis='$jenis' AND idPh='$ph' AND idSuhu='$suhu' AND idKedalaman='$kedalaman' AND kelas='$kelas' $wh
		");
	if ($check->fetch_object()->total) {
		$_SESSION['flash'] = array("success"=>false,"msg"=>"data sudah terdaftar");
		
		header("location: $baseUrl/analisa/");
		die();
	}


	if (isset($_GET['idAnalisa'])&&!empty($_GET['idAnalisa'])) {
		$id = $_GET['idAnalisa'];
		$query = $db->query("UPDATE analisa set 
								idTanaman = '$tanaman' ,
								idJenis = '$jenis',
								idPh = '$ph',
								idSuhu = '$suhu',
								idKedalaman = '$kedalaman',
								kelas = '$kelas'
								where idAnalisa = $id");
	}else{
		$query = $db->query("INSERT into analisa values('','$tanaman','$jenis','$ph','$suhu','$kedalaman','$kelas')");
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/analisa/");
	}
?>