<?php  
	if(isset($_GET['idTanaman'])){
		include_once("api/tanaman/read.php");
		$data = $data[0];
	}
	$id = isset($_GET['idTanaman'])?$_GET['idTanaman']:"";
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tanaman
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>tanaman</a></li>
    <li><a href="#">tambah</a></li>
  </ol>
</section>

 <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Tanaman</h3>
        </div>
        <div class="box-body">
          <form role="form" method="post" action="<?=$baseHref."api/tanaman/submit.php?idTanaman=".$id?>" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanaman</label>
                  <input type="text" class="form-control" name="tanaman" value="<?=(isset($data->tanaman))?$data->tanaman:""?>">
                </div>
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