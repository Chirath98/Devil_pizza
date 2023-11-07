
<?php 
    //Database location and credentials
    define('SITEURL','http://localhost/?page=');
    
    $servername = "localhost";
    $username = "Devil_pizza";
    $password = "D313ac71hb";
    $dbname = "devil_pizza";

    // Create database connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
  ?>
  

    
