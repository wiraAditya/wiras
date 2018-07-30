<?php  
	include_once("config/connection.php");
	if(isset($_GET['idAnalisa'])){
		include_once("api/analisa/read.php");
		$data = $data[0];
	}
	$dtanaman=[];
	$djenis=[];
	$dph=[];
	$dsuhu=[];
	$dkedalaman=[];
	// combobox
	// -----tanaman
	$qtanaman = $db->query("SELECT * FROM jenis_tanaman");
	if ($qtanaman->num_rows) {
		while ($r = $qtanaman->fetch_object()) {
			$dtanaman[] = $r;
		}
	}
	// -----jenistanah
	$qjenis = $db->query("SELECT * FROM jenis_tanah");
	if ($qjenis->num_rows) {
		while ($r = $qjenis->fetch_object()) {
			$djenis[] = $r;
		}
	}
	// -----ph
	$qph = $db->query("SELECT * FROM ph");
	if ($qph->num_rows) {
		while ($r = $qph->fetch_object()) {
			$dph[] = $r;
		}
	}
	// -----suhu
	$qsuhu = $db->query("SELECT * FROM suhu");
	if ($qsuhu->num_rows) {
		while ($r = $qsuhu->fetch_object()) {
			$dsuhu[] = $r;
		}
	}
	// -----kedalaman
	$qkedalaman = $db->query("SELECT * FROM kedalaman");
	if ($qkedalaman->num_rows) {
		while ($r = $qkedalaman->fetch_object()) {
			$dkedalaman[] = $r;
		}
	}
	$id = isset($_GET['idAnalisa'])?$_GET['idAnalisa']:"";
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Analisa
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>analisa</a></li>
    <li><a href="#">tambah</a></li>
  </ol>
</section>
 <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Analisa</h3>
        </div>
        <div class="box-body">
          <form role="form" method="post" action="<?=$baseHref."api/analisa/submit.php?idAnalisa=".$id?>" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanaman</label>
                  <select required="" name="tanaman" id="" class="form-control">
                  	<option value=""></option>
                  	<?php foreach ($dtanaman as $key => $value): ?>
                  		<option 
						 <?php if (!empty($id)){ echo ($data->idTanaman==$value->idTanaman)?"selected":"";} ?>
                  		 value="<?php echo$value->idTanaman ?>"><?php echo $value->tanaman ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Tanah</label>
                  <select required="" name="jenis" id="" class="form-control">
                  	<option value=""></option>
                  	<?php foreach ($djenis as $key => $value): ?>
                  		<option 
						 <?php if (!empty($id)){ echo ($data->idJenis==$value->idJenis)?"selected":"";} ?>
                  		 value="<?php echo$value->idJenis ?>"><?php echo $value->jenis ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
               	<div class="form-group">
                  <label for="exampleInputEmail1">PH</label>
                  <select required="" name="ph" id="" class="form-control">
                  	<option value=""></option>
                  	<?php foreach ($dph as $key => $value): ?>
                  		<option 
						 <?php if (!empty($id)){ echo ($data->idPh==$value->idPh)?"selected":"";} ?>
                  		 value="<?php echo$value->idPh ?>"><?php echo $value->ph ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Suhu</label>
                  <select required="" name="suhu" id="" class="form-control">
                  	<option value=""></option>
                  	<?php foreach ($dsuhu as $key => $value): ?>
                  		<option 
						 <?php if (!empty($id)){ echo ($data->idSuhu==$value->idSuhu)?"selected":"";} ?>
                  		 value="<?php echo$value->idSuhu ?>"><?php echo $value->suhu ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kedalaman</label>
                  <select required="" name="kedalaman" id="" class="form-control">
                  	<option value=""></option>
                  	<?php foreach ($dkedalaman as $key => $value): ?>
                  		<option 
						 <?php if (!empty($id)){ echo ($data->idKedalaman==$value->idKedalaman)?"selected":"";} ?>
                  		 value="<?php echo$value->idKedalaman ?>"><?php echo $value->kedalaman ?></option>
                  	<?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kelas</label>
                  <select required="" name="kelas" id="" class="form-control">
                  		<option 
						 <?php if (!empty($id)){ echo ($data->kelas=="Cocok")?"selected":"";} ?>
                  		 value="Cocok">Cocok</option>

                  		<option 
						 <?php if (!empty($id)){ echo ($data->kelas=="Tidak Cocok")?"selected":"";} ?>
                  		 value="Tidak Cocok">Tidak Cocok</option>
                  </select>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>