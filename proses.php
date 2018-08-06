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
		print_r("total".$totalphtcocok);
		print_r("totalall".$totaltidakcocok);
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

		echo "</br>";
		$cocok = round($persenjeniscocok*$persenphcocok*$persensuhucocok*$persendalamcocok*($persencocok/100)*100,2);
		$tidakcocok = round($persenjenistcocok*$persenphtcocok*$persensuhutcocok*$persendalamtcocok*($persentidakcocok/100)*100,2);
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
