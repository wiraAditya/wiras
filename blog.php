<?php 
	include_once "admin/config/connection.php";
	include_once "admin/config/function.php";
	$qr = $db->query("SELECT a.*,b.nama FROM news a inner join user b USING(idUser) order by dateCreate desc");
	$data=array();
	if ($qr->num_rows) {
		while($row = $qr->fetch_object()){
			$data[] = $row;
		}
	}else{
		die("Website under maintenance");
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
</head>
<body class="bg-grey ">
	<!-- carousel  -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	  	<?php foreach ($data as $key => $value): ?>
	  		<?php if ($key==3){break;} ?>
		    <div class="carousel-item <?php echo $key==0?"active":"" ?>">
		      <img class="d-block w-100 img-carousel" src="admin/assets/dist/img/news/<?php echo$value->img ?>" alt="First slide">
		      <div class="carousel-caption ">
		      	<div class="textCapt">
				    <h1><?php echo $value->judul; ?></h1>
				    <a href="<?php echo "blogDet.php?id=".$value->idNews ?>" class="btn btn-white-bordered py-2 px-4 my-5">Read</a>
		      	</div>
			  </div>
		    </div>
	  		
	  	<?php endforeach ?>
	    
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- content -->
	<div class="row px-4 py-3">
		<?php foreach ($data as $key => $value): 
				$title = limitString(55,$value->judul);
				$content = limitString(100,$value->content);
			?>
			<div class="col-md-4 col-sm-6">
				<div class="card-box">
					<div class="card-image">
						<img src="admin/assets/dist/img/news/<?php echo$value->img ?>" class="img-fluid w-100" alt="">
					</div>
					<div class="card-content">
						<h3 class="pb-3"><?php echo $title ?></h3>
						<p class="color-grey"><?php echo date("d M Y") ?></p>
						<p><?php echo $content ?></p>	
						<a href="<?php echo "blogDEt.php?id=".$value->idNews ?>">Read more..</a>
					</div>
				</div>
			</div>
	  	<?php endforeach ?>
	</div>
</body>
</html>
<script src="assets/dist/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/dist/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/dist/popper/popper.min.js"></script>