<?php 
	session_start();
	include_once("../../config/connection.php");
	
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		$qcheck = $db->query("SELECT * from user where idUser = ".$_GET['idUser']);
		if ($qcheck->num_rows) {
			$d=$qcheck->fetch_object();
			if ($d->role==1) {
				$_SESSION['flash']="Anda tidak dapat menghapus user super admin";
			}else{
				$query = $db->query("UPDATE user set aktif='0' where idUser = ".$_GET['idUser']);
			}
		}else{
			$_SESSION['flash']="Terjadi masalah saat menghapus data";

		}
	}else{
		$_SESSION['flash']="Terjadi masalah saat menghapus data";
	}
	header("location: $baseUrl/user/");
	
?>