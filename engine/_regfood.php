<?php

require_once("_db.php");


$sql2="INSERT INTO `tbl_food` (`uid`, `title`, `descript`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES (NULL, '".$_POST['title']."', '".$_POST['descript']."', '".$_POST['price']."', '".md5($_POST['title'])."-img.jpg', '".$_POST['category']."', '".$_POST['featured']."', '".$_POST['active']."')";


$target_dir = "c:/xampp/htdocs/resources/images/food/";
$target_file = $target_dir . basename(md5($_POST['title'])."-img.jpg");
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
}


if ($con->query($sql2) === TRUE) {
    echo "New record created successfully";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    header('Location: http://localhost/?page=pages/Manage-food.php');
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}   
$con->close();
