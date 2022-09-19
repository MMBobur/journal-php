<?php
  include "./config.php";
  include "./lib/db.php";
  include "./lib/format.php";
  
  $_SESSION['lang'] = 'uz';

  if(!isset($_COOKIE['lang'])){
    include('lang_uz.php');
  }else{
    include ('lang_'.$_COOKIE['lang'].'.php');
    $_SESSION['lang'] = $_COOKIE['lang'];
  }

  $view = $_GET["view"] ?? "index";

  include "./layauts/header.php";

  include "./pages/".$view.".php";

  include "./layauts/footer.php";

?>
