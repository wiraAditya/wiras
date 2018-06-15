<?php 
	include_once("../../config/connection.php");
	
	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$query = $db->query("DELETE from coba where id = ".$_GET['id']);
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/test/");
	}
?>