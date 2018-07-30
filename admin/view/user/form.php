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
    <li><a href="#">tambah</a></li>
  </ol>
</section>

 <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah User</h3>
        </div>
        <div class="box-body">
          <form role="form" method="post" action="<?=$baseHref."api/user/submit.php?idUser=".$id?>" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input required type="text" class="form-control" name="nama" value="<?=(isset($data->nama))?$data->nama:""?>">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input required type="email" class="form-control" id="exampleInputEmail1" name="">
                </div> -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Telp</label>
                  <input required type="text" class="form-control" name="telp" value="<?=(isset($data->telp))?$data->telp:""?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input required type="text" class="form-control" name="username" value="<?=(isset($data->username))?$data->username:""?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input <?php echo !(isset($data))?"required":"" ?> type="password" class="form-control" name="password" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea cols="30" rows="10" class="form-control" name="alamat"><?=(isset($data->alamat))?$data->alamat:""?></textarea>
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