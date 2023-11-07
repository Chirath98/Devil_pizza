<?php
require_once("_db.php");

if(isset($_GET['uid']))
    {
        $uid = $_GET['uid'];
        $sql = "DELETE FROM `tbl_food` WHERE uid = $uid";
        $result = $con->query($sql);

        if ($con->query($sql) === TRUE) {
            //echo "Record Deleted successfully";
            $_SESSION['delete'] = "<div class='alert alert-success'>Food Deleted Successfully.</div>";
            header('Location: http://localhost/?page=pages/Manage-food.php');
        } 
        else {
            echo "Error: " . $sql . "<br>" . $con->error;
            $_SESSION['delete'] = "<div class='alert alert-danger'>Failed to Delete Food.</div>";
        }
        $con->close();
    }
?>