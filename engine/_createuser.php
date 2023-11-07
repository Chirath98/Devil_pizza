<?php
    if ($_POST['password'] == $_POST['passwordV'])
    {
        require_once("_db.php");

        $sql = "INSERT INTO `tbl_users`(`uid`, `fname`, `lname`, `email`, `password`, `joind`, `status`) 
        VALUES (NULL, '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".md5($_POST['password'])."', TIMESTAMP('".date("Y-m-d",time())."'), '1')";

        if ($con->query($sql) === TRUE) {
            echo "New Record created successfully";
            header('Location: http://localhost/');
        } 
        else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }        
    else {
        echo 'Password not match';
        header("location: javascript://history.go(-1)");
    }
?>