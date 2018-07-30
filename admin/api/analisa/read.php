<?php  
	$cond ="";
	if (isset($_GET['idAnalisa'])&&!empty($_GET['idAnalisa'])) {
		$cond .= " and idAnalisa=".$_GET['idAnalisa'];
	}
	$dataqr = $db->query("SELECT a.*,b.tanaman,c.jenis,d.ph,e.suhu,f.kedalaman from analisa a
							inner join jenis_tanaman b on a.idTanaman=b.idTanaman
							inner join jenis_tanah c on a.idJenis = c.idJenis
							inner join ph d on a.idPh = d.idPh
							inner join suhu e on a.idSuhu = e.idSuhu
							inner join kedalaman f on f.idKedalaman = a.idKedalaman
							 where 1=1  order by idAnalisa desc");
	
	$data = array();
	if ($dataqr->num_rows) {
		while ($row = $dataqr->fetch_object()) {
			$data[] = $row;
		}
	}

?>