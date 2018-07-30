<?php 
	include_once("../../config/connection.php");
	if (isset($_GET['idAnalisa'])&&!empty($_GET['idAnalisa'])) {
		
		$query = $db->query("DELETE from analisa where idAnalisa = ".$_GET['idAnalisa']);
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/analisa/");
	}
?>