<?php 
session_start();
	include_once "admin/config/connection.php";

	if (isset($_POST)) {
		$tanaman = $_POST['tanaman'];
		$jenis = $_POST['jenis'];
		$suhu = $_POST['suhu'];
		$ph = $_POST['ph'];
		$kedalaman = $_POST['kedalaman'];

		$tanamantxt = $db->query("SELECT tanaman from jenis_tanaman where idTanaman='$tanaman'")->fetch_object()->tanaman;
		$jenistxt = $db->query("SELECT jenis from jenis_tanah where idJenis='$jenis'")->fetch_object()->jenis;
		$suhutxt = $db->query("SELECT suhu from suhu where idSuhu='$suhu'")->fetch_object()->suhu;
		$phtxt = $db->query("SELECT ph from ph where idPh='$ph'")->fetch_object()->ph;
		$kedalamantxt = $db->query("SELECT kedalaman from kedalaman where idKedalaman='$kedalaman'")->fetch_object()->kedalaman;




		/*------------------------------------------
					total
		----------------------------------------------*/
		$qtotalsemua =  $db->query("SELECT count(idAnalisa) as total from analisa where idTanaman = $tanaman");
		$totalsemua = $qtotalsemua->fetch_object()->total;
		// cocok
		$qtotalcocok =  $db->query("SELECT count(idAnalisa) as total from analisa where idTanaman = $tanaman and kelas='Cocok'");
		$totalcocok = $qtotalcocok->fetch_object()->total;
		// tidak cocok
		$qtotaltidakcocok =  $db->query("SELECT count(idAnalisa) as total from analisa where idTanaman = $tanaman and kelas='Tidak Cocok'");
		$totaltidakcocok = $qtotaltidakcocok->fetch_object()->total;

		/*------------------------------------------
					Presentase
		----------------------------------------------*/
		$qall = $db->query("SELECT count(idAnalisa) as total from analisa where idTanaman = $tanaman");
		$dcountall = $qall->fetch_object()->total;
		
		$persencocok = round($totalcocok/$dcountall*100);

		$persentidakcocok = round($totaltidakcocok/$dcountall*100);


		/*------------------------------------------
					tanah
		----------------------------------------------*/

			// cocok
		$qjeniscocok=$db->query("SELECT count(idAnalisa) as total from analisa where idJenis = $jenis and idTanaman = $tanaman and kelas='Cocok'");
		$tjeniscocok = $qjeniscocok->fetch_object()->total;
		$persenjeniscocok = round($tjeniscocok/$totalcocok,2);

			//tidak cocok 
		$qjenistcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idJenis = $jenis and idTanaman = $tanaman and kelas='Tidak Cocok'");
		
		$totaljenistcocok = $qjenistcocok->fetch_object()->total;
		$persenjenistcocok = round($totaljenistcocok/$totaltidakcocok,2);


		/*------------------------------------------
					ph
		----------------------------------------------*/
			// cocok
		$qphcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idPh = $ph and idTanaman = $tanaman and kelas='Cocok'");
		$tphcocok = $qphcocok->fetch_object()->total;
		$persenphcocok = round($tphcocok/$totalcocok,2);

			//tidak cocok 
		$qphtcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idPh = $ph and idTanaman = $tanaman and kelas='Tidak Cocok'");
		
		$totalphtcocok = $qphtcocok->fetch_object()->total;
		
		$persenphtcocok = round($totalphtcocok/$totaltidakcocok,2);

		/*------------------------------------------
					suhu
		----------------------------------------------*/
			// cocok
		$qsuhucocok=$db->query("SELECT count(idAnalisa) as total from analisa where idSuhu = $suhu and idTanaman = $tanaman and kelas='Cocok'");
		$tsuhucocok = $qsuhucocok->fetch_object()->total;
		$persensuhucocok = round($tsuhucocok/$totalcocok,2);

			//tidak cocok 
		$qsuhutcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idSuhu = $suhu and idTanaman = $tanaman and kelas='Tidak Cocok'");
		
		$tsuhutcocok = $qsuhutcocok->fetch_object()->total;
		$persensuhutcocok = round($tsuhutcocok/$totaltidakcocok,2);

		/*------------------------------------------
					kedalaman
		----------------------------------------------*/
			// cocok
		$qdalamcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idKedalaman = $kedalaman and idTanaman = $tanaman and kelas='Cocok'");
		$tdalamcocok = $qdalamcocok->fetch_object()->total;
		$persendalamcocok = round($tdalamcocok/$totalcocok,2);

			//tidak cocok 
		$qdalamtcocok=$db->query("SELECT count(idAnalisa) as total from analisa where idKedalaman = $kedalaman and idTanaman = $tanaman and kelas='Tidak Cocok'");
		
		$tdalamtcocok = $qdalamtcocok->fetch_object()->total;
		$persendalamtcocok = round($tdalamtcocok/$totaltidakcocok,2);
		
		if ($persenjeniscocok==0||$persenphcocok==0||$persensuhucocok==0||$persendalamcocok==0) {
			
			$cocok = number_format((($tjeniscocok+1)/($totalcocok+5))*(($tphcocok+1)/($totalcocok+5))*(($tsuhucocok+1)/($totalcocok+5))*(($tdalamcocok+1)/($totalcocok+5))*(($totalcocok+1)/($totalsemua+5)),10,'.','');
		}else{
			$cocok = number_format($persenjeniscocok*$persenphcocok*$persensuhucocok*$persendalamcocok*($persencocok/100),4,'.','');
			
		}
		if ($persenjenistcocok==0||$persenphtcocok==0||$persensuhutcocok==0||$persendalamtcocok==0) {
			$cocok = number_format((($totaljenistcocok+1)/($totaltidakcocok+5))*(($totalphtcocok+1)/($totaltidakcocok+5))*(($tsuhutcocok+1)/($totaltidakcocok+5))*(($tdalamtcocok+1)/($totaltidakcocok+5))*(($totaltidakcocok+1)/($totalsemua+5)),10,'.','');

		}else{
			$tidakcocok = number_format($persenjenistcocok*$persenphtcocok*$persensuhutcocok*$persendalamtcocok*($persentidakcocok/100),4,'.','');

		}
		$_SESSION['flash'] = array("cocok"=>$cocok,"tidak"=>$tidakcocok,"data"=>$_POST,"tanaman"=>$tanamantxt,
"jenis"=>$jenistxt,
"suhu"=>$suhutxt,
"ph"=>$phtxt,
"kedalaman"=>$kedalamantxt);
		header("location:analisa.php");

	}else{
		die("something error");
	}
?>
