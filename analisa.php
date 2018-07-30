<?php 
session_start();
if (isset($_SESSION['flash'])) {
	if (!empty($_SESSION['flash']['data'])) {
		$datas=$_SESSION['flash']['data'];
		$tanaman = $datas['tanaman'];
		$jenis = $datas['jenis'];
		$suhu = $datas['suhu'];
		$ph = $datas['ph'];
		$kedalaman = $datas['kedalaman'];
	}
}
	include_once "admin/config/connection.php";
	$cbtanaman=[];
	$cbtanah=[];
	$cbph=[];
	$cbsuhu=[];
	$cbkedalaman=[];
	$qtanaman = $db->query("SELECT * from jenis_tanaman");
	while($row=$qtanaman->fetch_object()){
		$cbtanaman[]=$row;
	}
	$qtanah = $db->query("SELECT * from jenis_tanah");
	while($row=$qtanah->fetch_object()){
		$cbtanah[]=$row;
	}
	$qph = $db->query("SELECT * FROM ph");
	while($row=$qph->fetch_object()){
		$cbph[]=$row;
	}
	$qsuhu = $db->query("SELECT * FROM suhu");
	while($row=$qsuhu->fetch_object()){
		$cbsuhu[]=$row;
	}

	$qkedalaman = $db->query("SELECT * FROM kedalaman");
	while($row=$qkedalaman->fetch_object()){
		$cbkedalaman[]=$row;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- bootstap -->
	<link rel="stylesheet" href="assets/dist/bootstrap/dist/css/bootstrap.min.css">
	<!-- custom -->
	<link rel="stylesheet" href="assets/css/custom.css">
  <script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>

</head>
<body class="bg-blue ">
	<div class="container">
		<div class="row justify-content-center py-3">
			<div class="col-md-9">
				<div class="card-box py-3" style="min-height: 0px">
					<form class="card-content color-black" method="post" action="proses.php">
					  <h3 class="pb-5">Analisa Kecocokan Tanah</h3>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Jenis Tanaman</label>
					    <select required="" name="tanaman" id="" class="form-control">
					    	<option value=""></option>
					    	<?php foreach ($cbtanaman as $key => $value): ?>
					    		<option <?php echo isset($tanaman)&&!empty($tanaman)&&$tanaman==$value->idTanaman ? "selected":"" ?> value="<?php echo $value->idTanaman ?>"><?php echo $value->tanaman ?></option>
					    	<?php endforeach ?>
					    </select>
					  </div>
					  <div class="row">
						  	
						  <div class="form-group col-6">
						    <label for="exampleInputEmail1">Jenis Tanah</label>
						    <select required="" name="jenis" id="" class="form-control">
						    	<option value=""></option>
						    	<?php foreach ($cbtanah as $key => $value): ?>
						    		<option <?php echo isset($jenis)&&!empty($jenis)&&$jenis==$value->idJenis ? "selected":"" ?> value="<?php echo $value->idJenis ?>"><?php echo $value->jenis ?></option>
						    	<?php endforeach ?>
						    </select>
						  </div>
						  <div class="form-group col-6">
						    <label for="exampleInputEmail1">PH</label>
						    <select required="" name="ph" id="" class="form-control">
						    	<option value=""></option>
						    	<?php foreach ($cbph as $key => $value): ?>
						    		<option <?php echo isset($ph)&&!empty($ph)&&$ph==$value->idPh ? "selected":"" ?> value="<?php echo $value->idPh ?>"><?php echo $value->ph ?></option>
						    	<?php endforeach ?>
						    </select>
						  </div>
						  <div class="form-group col-6">
						    <label for="exampleInputEmail1">Suhu</label>
						    <select required="" name="suhu" id="" class="form-control">
						    	<option  value=""></option>
						    	<?php foreach ($cbsuhu as $key => $value): ?>
						    		<option <?php echo isset($suhu)&&!empty($suhu)&&$suhu==$value->idSuhu ? "selected":"" ?> value="<?php echo $value->idSuhu ?>"><?php echo $value->suhu ?></option>
						    	<?php endforeach ?>
						    </select>
						  </div>
						  <div class="form-group col-6">
						    <label for="exampleInputEmail1">Kedalaman</label>
						    <select required="" name="kedalaman" id="" class="form-control">
						    	<option value=""></option>
						    	<?php foreach ($cbkedalaman as $key => $value): ?>
						    		<option <?php echo isset($kedalaman)&&!empty($kedalaman)&&$kedalaman==$value->idKedalaman ? "selected":"" ?> value="<?php echo $value->idKedalaman ?>"><?php echo $value->kedalaman ?></option>
						    	<?php endforeach ?>
						    </select>
						  </div>
						  
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php if (isset($_SESSION['flash'])&&!empty($_SESSION['flash'])): ?>
	
<script>
	

swal({
  title: 'Hasil Analisa ',
  html:'<p>Cocok : <?php echo $_SESSION['flash']['cocok'] ?>%</p> <p>Tidak Cocok : <?php echo $_SESSION['flash']['tidak'] ?>%</p> <p><span class="btn <?php echo $_SESSION['flash']['tidak']>$_SESSION['flash']['cocok']?"btn-danger":"btn-success" ?>"><?php echo $_SESSION['flash']['tidak']>$_SESSION['flash']['cocok']?"Tidak Cocok":"Cocok" ?></span></p>',
  imageUrl: 'assets/img/icon.png',
  imageWidth: 100,
  imageHeight: 100,
  imageAlt: 'Custom image'
})
</script>
<?php unset($_SESSION['flash']); endif ?>