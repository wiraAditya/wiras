<?php 
	include_once("../../config/connection.php");
	$tanaman = $_POST['tanaman'];
	if (isset($_GET['idTanaman'])&&!empty($_GET['idTanaman'])) {
		$id = $_GET['idTanaman'];
		$query = $db->query("UPDATE jenis_tanaman set tanaman = '$tanaman' where idTanaman = $id");
	}else{
		$query = $db->query("INSERT into jenis_tanaman values('','$tanaman')");
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/tanaman/");
	}
?>