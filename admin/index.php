<?php 
  include('../config.php');
  include('../lib/db.php');
  include('../lib/format.php');

  $view = $_GET['view'] ?? "works";
  $page = $_GET['page'] ?? "";

  if(isset($_GET["logout"])){
    if(logout()){
      header("location: index.php");
    }
  }

  if(isset($_POST["login"]) && isset($_POST["parol"])){
    login($_POST["login"], $_POST["parol"]);
  }

  if(isAuth()){
    include("./assets/header.php");
    include("./assets/views/".$page."/".$view.".php");
    include("./assets/footer.php");
  }else{
    include("./assets/views/login/index.php");
  }

?>
    