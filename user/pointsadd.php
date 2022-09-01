<?php

if (isset($_POST["register"]))
 {

    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");

    $user_name = $_POST["user_name"];
    $points = $_POST["points"];
    

    $query="INSERT INTO points(user_name,points) VALUES ('$user_name','$points') ";
    $result = mysqli_query($conString, $query);
    if (!$result) {
        $error = mysqli_error('.//error.html');
        print $error;
        exit;
    } else {
        // header('Refresh: 2; url=successfull.php');
        echo '<script>alert("Sale details added")</script>';
        header('location:worker.php');
        exit();
    }
}
?>
