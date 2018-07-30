<?php 
session_start();
header("Content-type:Application-json");

  if (!strpos($_SERVER['REQUEST_URI'],"index.php")) {
    header("location:index.php");
  }
  include_once("config/connection.php");
  

  $baseHref = explode("index.php", $baseUrl)[0];
  // print_r($_SERVER);
  if (!strpos($baseUrl, "index.php")) {
    die("base url must ended with index.php");
  }
  // view set
  $viewPath="./view/index/index.php";
  // print_r($_SERVER); 
  $pathinfo =isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:"";
  $pathUrl = explode("/",substr($pathinfo,1,strlen($pathinfo)));
  if (!empty($pathUrl)&&!empty($pathUrl[0])) {
    $viewPath = "./view";
    foreach ($pathUrl as $key => $value) {
      $value =explode("?",$value);
      $viewPath.="/".$value[0];
      if ($key==count($pathUrl)-1) {
        if (empty($value[0])&&$key) {
          $viewPath.= $pathUrl[$key-1]."Index";
        }
        $viewPath.=".php";
      }
    }
  }

  $viewPath = $viewPath;
// print_r($viewPath);
// die();
  if(!is_file($viewPath)){
    include_once("./view/404.php");
    die();
  }
  if (isset($_SESSION['id'])) {
    
    include_once("./view/mainContent.php");
    
  }else{
    include_once("./view/loginContent.php");

  }
  if (isset($_SESSION['flash'])) {
    unset($_SESSION['flash']);
  }
?>