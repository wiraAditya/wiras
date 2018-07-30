<?php 
	include_once("../../config/connection.php");
	
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		$query = $db->query("UPDATE user set aktif='0' where idUser = ".$_GET['idUser']);
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/user/");
	}
?>