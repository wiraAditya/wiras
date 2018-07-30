<?php 
	include_once("../../config/connection.php");
	if (isset($_GET['idTanaman'])&&!empty($_GET['idTanaman'])) {
		$check = $db->query("SELECT count(idTanaman) as total from analisa where idTanaman = '".$_GET['idTanaman']."'");
		if ($check->fetch_object()->total) {
			session_start();
			$_SESSION['flash'] = array("success"=>false,"msg"=>"data tercatat dalam analisa");
			header("location: $baseUrl/tanaman/");
			die();
		}
		$query = $db->query("DELETE from jenis_tanaman where idTanaman = ".$_GET['idTanaman']);
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/tanaman/");
	}
?>