<?php  
	$cond ="";
	if (isset($_GET['id'])&&!empty($_GET['id'])) {
		$cond .= " and id=".$_GET['id'];
	}
	$dataqr = $db->query("SELECT * from coba where 1=1 $cond order by id desc");
	$data = array();
	if ($dataqr->num_rows) {
		while ($row = $dataqr->fetch_object()) {
			$data[] = $row;
		}
	}

?>