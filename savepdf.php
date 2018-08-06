<?php 
	require_once 'lib/dompdf/lib/html5lib/Parser.php';
	
	require_once 'lib/dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();
	use Dompdf\Dompdf;
	$btn = ($_GET['cocok']>$_GET['tidak'])?"<span class='btn btn-success'>Cocok</span>":"<span class='btn btn-danger'>Tidak Cocok</span>";
	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	$dompdf->loadHtml("<html>
<head>
	<style>
	*{box-sizing: border-box;}
	</style>
	<link rel='stylesheet' href='assets/dist/bootstrap/dist/css/bootstrap.min.css'>

</head>
<body style='padding: 0px;margin: 0px'>
	

	<header style='padding: 10px;background-color: #284c66;position:  relative;'>
	<img src='assets/img/baner.png' height='120px' width='100%' alt=''>
	</header>
	
	<section style='width: 70%;margin: auto;margin-top: 20px;font-size: 25px'>
		<p><b>Tanaman : </b>".$_GET['tanaman']."</p>
		<p><b>Jenis Tanah : </b>".$_GET['jenis']."</p>
		<p><b>Suhu : </b>".$_GET['suhu']."</p>
		<p><b>PH : </b>".$_GET['ph']."</p>
		<p><b>Kedalaman : </b>".$_GET['kedalaman']."</p>
		<h1><u>Hasil Analisa</u></h1>
		<p><b>Cocok : </b>".$_GET['cocok']."%</p>
		<p><b>Tidak Cocok : </b>".$_GET['tidak']."%</p>
		<p>$btn </p>

	</section>
</body>
</html>");

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'potrait');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();
?>
