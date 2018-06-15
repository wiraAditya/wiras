<?php  
	if(isset($_GET['id'])){
		include_once("api/coba/read.php");
		$data = $data[0];
	}
	$id = isset($_GET['id'])?$_GET['id']:"";
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    user
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>user</a></li>
    <li><a href="#">tambah</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
    	<h3 class="box-title">Tambah User</h3>
    </div>
    <div class="box-body">
      <form role="form" method="post" action="<?=$baseHref."api/coba/submit.php?id=".$id?>" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
          <div class="box-body">
          	<div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?=(isset($data->nama))?$data->nama:""?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?=(isset($data->alamat))?$data->alamat:""?></textarea>
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
<!-- /.content -->