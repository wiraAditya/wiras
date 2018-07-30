<?php  
	date_default_timezone_set("Asia/Kuala_Lumpur");

$baseUrl = "http://localhost/wiras/admin/index.php";
	$db = mysqli_connect("localhost","root","","db_pertanahan");
	if ($db->error) {
		die("error : ".$db->error);
	}
?>