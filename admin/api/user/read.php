<?php  
	$cond ="";
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		$cond .= " and idUser=".$_GET['idUser'];
	}
	$dataqr = $db->query("SELECT * from user where 1=1 $cond order by idUser desc");
	
	$data = array();
	if ($dataqr->num_rows) {
		while ($row = $dataqr->fetch_object()) {
			$data[] = $row;
		}
	}

?>