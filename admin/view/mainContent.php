<!DOCTYPE html>
<html>
<head>
  <meta 	charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <base href="<?=$baseHref?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="./assets/dist/css/custom.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./assets/dist/css/skins/_all-skins.min.css">
	<!-- jQuery 3 -->
  <link rel="stylesheet" type="text/css" href="./assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  

  <script src="./assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="./assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="./assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>
	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/img/icon.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/img/icon.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama'] ?>
                  <small>
                  <strong>
                    <?php echo $_SESSION['role']==1?"Super Admin":"" ?>
                  </strong>

                  </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a class="btn btn-danger " style="color: #fff !important" href="api/login/logout.php">Logout</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a class="btn btn-primary " style="color: #fff !important" href="<?php echo $baseUrl."/user/editProfile?idUser=".$_SESSION['id'] ?>">Profile</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/img/icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><strong><?php echo $_SESSION['role'] == 1?"Super Admin":"Admin" ?></strong></p>
          <p><?php echo $_SESSION['nama'] ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <?php if ($_SESSION['role']==1): ?>
          <li>
            <a href="<?=$baseUrl."/user/"?>">
              <i class="fa fa-user"></i> <span>Data User</span>
            </a>
          </li>
          <li>
            <a href="<?=$baseUrl."/blog/"?>">
              <i class="fa fa-edit"></i> <span>Data Blog</span>
            </a>
          </li>
          <li>
            <a href="<?=$baseUrl."/tanaman/"?>">
              <i class="fa fa-tree"></i> <span>Data Tanaman</span>
            </a>
          </li>
          <li>
            <a href="<?=$baseUrl."/analisa/"?>">
              <i class="fa fa-dashboard"></i> <span>Data Analisa</span>
            </a>
          </li>
          
        <?php else: ?>
          <li>
            <a href="<?=$baseUrl."/blog/"?>">
              <i class="fa fa-edit"></i> <span>Data Blog</span>
            </a>
          </li>
        <?php endif ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php include_once($viewPath) ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./assets/wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="./assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="./assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/dist/js/demo.js"></script>
<script src="./assets/bower_components/ckeditor/ckeditor.js"></script>
<script>
    if($('#editor1').length){

      CKEDITOR.replace('editor1')
    }
  $("#table-datatable").DataTable();
</script>
</body>
</html>
