<?php  
	$cond ="";
	if (isset($_GET['idTanaman'])&&!empty($_GET['idTanaman'])) {
		$cond .= " and idTanaman=".$_GET['idTanaman'];
	}
	$dataqr = $db->query("SELECT * FROM jenis_tanaman where 1=1 $cond order by idTanaman Desc");
	
	$data = array();
	if ($dataqr->num_rows) {
		while ($row = $dataqr->fetch_object()) {
			$data[] = $row;
		}
	}

?>