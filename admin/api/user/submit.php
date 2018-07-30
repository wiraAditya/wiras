<?php 
	include_once("../../config/connection.php");
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$alamat = $_POST['alamat'];
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		$id = $_GET['idUser'];
		$query = $db->query("UPDATE user set nama = '$nama',alamat='$alamat',telp='$telp',
		username='$username',password='$password' where idUser = $id");
	}else{
		$query = $db->query("INSERT into user values('','$nama','$alamat','$telp','$username','$password','2','1')");
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/user/");
	}
?>