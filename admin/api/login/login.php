<?php  
	session_start();
	if (isset($_POST['submit'])) {
		$un = $_POST['un'];
		$pw = $_POST['pw'];
	}else{
		$_SESSION['flash'] = "something error";
	}
?>