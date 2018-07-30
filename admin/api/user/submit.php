<?php 
	session_start();
	include_once("../../config/connection.php");
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$alamat = $_POST['alamat'];
	$wherecheck=(isset($_GET['idUser'])&&!empty($_GET['idUser']))?" and idUser!=".$_GET['idUser']:"";
	$check = $db->query("SELECT count(idUser) as total from user where username = '$username' $wherecheck");
	
	if ($check->fetch_object()->total) {
		$_SESSION['flash'] = "username sudah terdaftar";
		header("location: $baseUrl/user/");
		die();
	}
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		$id = $_GET['idUser'];
		$setpw = !empty($password)?" , password=MD5('$password')":"";
		$query = $db->query("UPDATE user set nama = '$nama',alamat='$alamat',telp='$telp',
		username='$username' $setpw where idUser = $id");
	}else{
		$query = $db->query("INSERT into user values('','$nama','$alamat','$telp','$username',MD5('$password'),'2','1')");
	}
	if(!$query)
		die("error execute query");
	else{
		if ($_SESSION['role']==1) {
			header("location: $baseUrl/user/");
		}else{
			header("location: $baseUrl/");

		}
	}
?>