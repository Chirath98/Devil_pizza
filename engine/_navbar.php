<?php 
require_once("engine\_db.php");

$sql = "SELECT text, link FROM tbl_menu";
$result = $con->query($sql);
?>
 <!--Navbar begain-->
<nav class="navbar navbar-expand-lg navbar-light NavbarBG">
    <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" aria-current="page" href="?page=Home.php"><img src="resources\images\logo.png" alt="" width="100" class="d-inline-block align-text-center"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/?page=pages/Food.php">Food</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link active" href="http://localhost/?page=pages/Appetizers.php">Appetizers</a>
                </li>
                <li  class ="nav-item">
                    <a class ="nav-link active" href="http://localhost/?page=pages/Pizza.php">Pizza</a>
                </li>
                <li  class ="nav-item">
                    <a class ="nav-link active" href="http://localhost/?page=pages/Nutrition.php">Nutrition</a>
                </li>
                <li  class ="nav-item">
                    <a class ="nav-link active" href="http://localhost/?page=pages/FoodRecipe.php">Food Recipe</a>
                </li>
            
            

                <!--?php
                   $pages = glob('pages/*.php',GLOB_BRACE);
                   foreach ($pages as $page){
                     //echo $page;
                     echo '<li class="nav-item">';
                     echo '<a class="nav-link active" aria-current="page" href="?page='. $page.'">'.str_replace('.php','',(str_replace('pages/','',$page))).'</a>';
                     echo '</li>';
                   }                               
                ?-->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if (isset($_SESSION['uid'])){
                         echo '<li><a class="dropdown-item" href="http://localhost/?page=pages/Manage-food.php">Manage-food</a></li>';
                         echo '<li><a class="dropdown-item" href="http://localhost/?page=pages/Manage-order.php">Manage-order</a></li>';
                        }
                        ?>
                        <li><a class="dropdown-item" href="http://localhost/?page=pages/EmailVerification.php">Email Verification</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </div>
               <!-- Display login logout based on the session status-->

                <?php
                if (isset($_SESSION['uid'])){
                    echo'<ul class="nav justify-content-end">';
                    echo'<li class="nav-item">';
                    echo'<a class="btn btn-outline-secondary" aria-current="page" href="engine\_logoffuser.php">Log Out From '.$_SESSION["fname"].'</a></li></ul>';
                    echo '&nbsp';
                    echo '&nbsp';
                    echo '&nbsp';                 
                   // echo '<a href="?page=pages/Order.php"><img src="https://img.icons8.com/ios-glyphs/30/000000/fast-cart.png"/></a>';
                }
                else{
                    echo'<form class="d-flex">';
                    echo'<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#mdl_login">Log in</button>';
                    echo'</form>';
                    echo '&nbsp';
                    echo'<form class="d-flex">';
                   // echo'<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#mdl_register">Register</button>';
                   echo'<a href="?page=pages/Register.php" class="btn btn-outline-success" >Register</a> ';
                   echo'</form>';          
                }
                ?>
        </div>
    </div>
</nav>

                <?php 
                    if(isset($_SESSION['order']))
                    {
                        echo $_SESSION['order'];
                        unset($_SESSION['order']);
                    }
                ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">...</nav>
