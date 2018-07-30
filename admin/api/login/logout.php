<?php  
	include_once("../../config/connection.php");
session_start();
	unset($_SESSION['id']);
	unset($_SESSION['nama']);
	unset($_SESSION['role']);

	header("location:$baseUrl");

?>