<!doctype html>
<html lang="en">
  
<?php session_start(); ?>


<?php
if(isset($_GET['page'])){
  $content_page = $_GET['page'];
}else{
  $content_page = "Home.php";
}
?>


<?php require_once ("engine/_db.php") ?>

<head>
    <!--impot meta definitions-->
    <?php require_once("engine\_meta.php"); ?>
    
    <!--impot style definitions-->
    <?php require_once("engine\_styles.php"); ?>
    <title>Devil Pizza</title>
   
   
</head>
<body> <!--class="BodyBG"-->
      <div class="container">
        <!--impot navbar-->
        <?php require_once("engine\_navbar.php"); ?>
        <!--impot content-->
    
        <?php require_once ("$content_page") ?>
        
        

        <!--impot footer-->
        <?php require_once("engine\_footer.php"); ?>
        <?php require_once("engine\_scripts.php"); ?>

        <!--import login/log off model-->
        <?php require_once("engine\_mdl_login.php"); ?>
        <?php require_once("engine\_mdl_reguser.php"); ?>
      </div>
</body>
</html> 