<?php  
	if(isset($_GET['idUser'])){
		include_once("api/user/read.php");
		$data = $data[0];
	}
	$id = isset($_GET['idUser'])?$_GET['idUser']:"";
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    user
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>user</a></li>
    <li><a href="#">view</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
    	<h3 class="box-title">View User</h3>
    </div>
    <div class="box-body">
      <form role="form" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
          <div class="box-body">
          	<div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control disabled" disabled name="nama" value="<?=(isset($data->nama))?$data->nama:""?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control disabled" disabled name="username" value="<?=(isset($data->username))?$data->username:""?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Telp</label>
              <input type="text" class="form-control disabled" disabled name="telp" value="<?=(isset($data->telp))?$data->telp:""?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Role</label>
              <input type="text" class="form-control disabled" disabled name="telp" value="<?=$data->role==1?'Super Admin':'Admin'?>">
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <textarea name="alamat" id="" cols="30" rows="10" class="form-control disabled" disabled><?=(isset($data->alamat))?$data->alamat:""?></textarea>
            </div>
          </div>
          <!-- /.box-body -->
        </form>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->