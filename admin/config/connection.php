<?php  
$baseUrl = "http://localhost/wiras/admin/index.php";
	$db = mysqli_connect("localhost","root","","db_pertanahan");
	if ($db->error) {
		die("error : ".$db->error);
	}
?>