<?php

if (isset($_POST["register"]))
 {

    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");

    $user_name = $_POST["user_name"];
    $totalcost = $_POST["totalcost"];
    $date = date("Y-m-d H:i:s");

    $query="INSERT INTO sales_inf(user_name,totalcost,date) VALUES ('$user_name','$totalcost','$date') ";
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
