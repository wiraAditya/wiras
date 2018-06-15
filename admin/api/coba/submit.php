<?php 
	include_once("../../config/connection.php");
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$id = $_GET['id'];
		$query = $db->query("UPDATE coba set nama = '$nama',alamat='$alamat' where id = $id");
	}else{
		$query = $db->query("INSERT into coba values('','$nama','$alamat')");
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/test/");
	}
?>