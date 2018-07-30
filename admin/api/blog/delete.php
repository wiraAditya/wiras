<?php 
	include_once("../../config/connection.php");
	
	if (isset($_GET['idNews'])&&!empty($_GET['idNews'])) {
		$query = $db->query("DELETE from news where idNews = ".$_GET['idNews']);
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/blog/");
	}
?>