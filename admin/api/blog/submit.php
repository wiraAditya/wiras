<?php 
	include_once("../../config/connection.php");
	include_once("../../config/function.php");
	$judul = $_POST['judul'];
	$content = $_POST['content'];
	$dateCreate = date("Y-m-d H:i:s");
	$image = "";
	$idUser=1;
	$filename="";
  	if(!empty($_FILES['foto']['name'])){
        $ext = pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);
        $name = date("Ymdhis");
        $fileinfo = pathinfo($_FILES['foto']['name']);
        $extension = "jpg";
        $image = $name . "." . $extension;
        $filename = compress_image($_FILES["foto"]["tmp_name"], "../../assets/dist/img/news/".$image, 30, $image);
    }
	if (isset($_GET['idBlog'])&&!empty($_GET['idBlog'])) {
		$setimg=(!empty($image)&&$filename)?",img = '$image'":"";
		if (!empty($image) && $filename) {
			unlink("../../assets/dist/img/news/".$_POST['fotolama']);
		}
		$id = $_GET['idBlog'];
		
		$query = $db->query("UPDATE news set judul = '$judul', content='$content', idUser='$idUser' $setimg where idNews = '$id'");
	}else{
		$query = $db->query("INSERT into news values('','$judul','$content','$dateCreate',$image,'$idUser')");
	}
	if(!$query)
		die("error execute query");
	else{
		header("location: $baseUrl/blog/");
	}
?>