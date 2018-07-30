<?php  
	if(isset($_GET['idNews'])){
		include_once("api/blog/read.php");
		$data = $data[0];
	}
	$id = isset($_GET['idNews'])?$_GET['idNews']:"";
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    blog
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>blog</a></li>
    <li><a href="#">tambah</a></li>
  </ol>
</section>

 <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Blog</h3>
        </div>
        <div class="box-body">
          <form enctype="multipart/form-data" role="form" method="post" action="<?=$baseHref."api/blog/submit.php?idBlog=$id"?>" class=" col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
              <div class="box-body">
                <div class="form-group">
                  <?php if (isset($data->img)): ?>
                    
                  <img src=<?php echo "assets/dist/img/news/".$data->img  ?> class="img-responsive" alt="">
                  <?php endif ?>
                  <label for="exampleInputEmail1">Foto</label>
                  <input type="file" class="form-control" name="foto">
                  <input type="hidden" value="<?php echo$data->img?>" name="fotolama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" name="judul" value="<?=(isset($data->judul))?$data->judul:""?>">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="">
                </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                  <textarea cols="30" rows="10" id="editor1" class="form-control" name="content"><?=(isset($data->content))?$data->content:""?></textarea>
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