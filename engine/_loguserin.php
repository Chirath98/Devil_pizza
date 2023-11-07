<?php
require_once("_db.php");
$sql = "SELECT uid, fname, lname, email, joind, status FROM `tbl_users` WHERE email = '".$_POST['Your_Email___']."' AND password = '".md5($_POST['password'])."' AND status = 1";

$result = $con->query($sql);

if ($result->num_rows ==1) {
    $row =$result->fetch_assoc();
    session_unset();
    session_destroy();
    session_start();

    $_SESSION["uid"] = $row["uid"];
    $_SESSION["fname"] = $row["fname"];
    $_SESSION["lname"] = $row["lname"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["joind"] = $row["joind"];
    $_SESSION["status"] = $row["status"];
    header('Location: http://localhost/');
}

else {
    echo'something is wrong try again';
}

$con->close();
?>