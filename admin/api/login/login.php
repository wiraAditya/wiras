<?php  
	session_start();
	include_once("../../config/connection.php");

	if (isset($_POST['submit'])) {
		$un = $_POST['un'];
		$pw = md5($_POST['pw']);
		$qcheck = $db->query("SELECT * from user where username = '$un' AND password = '$pw'");
		if ($qcheck->num_rows) {
			$data = $qcheck->fetch_object();
			$_SESSION['id'] = $data->idUser; 
			$_SESSION['nama'] = $data->nama; 
			$_SESSION['role'] = $data->role; 

		}else{
			$_SESSION['flash'] = "Username atau password salah";
		}
	}else{
		$_SESSION['flash'] = "something error";
	}
			header("location:$baseUrl");
?>