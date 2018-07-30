<?php 
	include_once "admin/config/connection.php";
	include_once "admin/config/function.php";
	if (!isset($_GET['id'])&&empty($_GET['id'])) {
		die("Data Not Found ");
	}
	$id = $db->real_escape_string($_GET['id']);
	$qr = $db->query("SELECT a.*,b.nama FROM news a inner join user b USING(idUser) where idNews=$id");
	$data=array();
	if ($qr->num_rows) {
		$data = $qr->fetch_object();
	}else{
		die("Data Not Found");
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
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card-box mb-4">
				<img src="admin/assets/dist/img/news/<?php echo$data->img ?>" alt="" class="img-fluid w-100">
				<div class="card-content px-5">
					<h3 class="pb-3"><?php echo$data->judul ?></h3>
					<p class="color-grey"><?php echo date("d M Y",strtotime($data->dateCreate)) ?></p>
					<p><?php echo $data->content ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>