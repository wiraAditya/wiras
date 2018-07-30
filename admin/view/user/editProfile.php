<?php  
	if (isset($_GET['idUser'])&&!empty($_GET['idUser'])) {
		if ($_SESSION['id']==$_GET['idUser']) {
			include"form.php";
		}else{
			echo '<section class="content">
					  <div class="box">
					    
					    <div class="box-body">
					      <h1>ERROR 404.Page Not Found</h1>
					    </div>
					  </div>

					</section>';
		}
	}else{
		echo '<section class="content">
					  <div class="box">
					    
					    <div class="box-body">
					      <h1>ERROR 404.Page Not Found</h1>
					    </div>
					  </div>

					</section>';
	}
?>