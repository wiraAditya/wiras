<?php  

	$cond ="";
	if (isset($_GET['idNews'])&&!empty($_GET['idNews'])) {
		$cond .= " and idNews=".$_GET['idNews'];
	}
	$dataqr = $db->query("SELECT * from news where 1=1 $cond order by idNews desc");
	
	$data = array();
	if ($dataqr->num_rows) {
		while ($row = $dataqr->fetch_object()) {
			$data[] = $row;
		}
	}

?>