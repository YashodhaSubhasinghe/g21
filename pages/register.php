<?php
$mess = "";
if (isset($_POST["register"])) {

    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");
    $user_name = $_POST["username"];
    $role = 'C';
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = $_POST["password"];
    $password_conf = $_POST["conf_password"];
    if ($password != $password_conf) {
       header("location:../registration.php?missmatch=password missmatch");
        exit;
    }
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $mobile = $_POST["mobile"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $query = "INSERT INTO `users_info` (`user_name`, `role`, `fname`, `lname`, `password`, `email`, `nic`, `mobile`, `city`, `country`) VALUES ('$user_name', '$role', '$fname', '$lname', '$password', '$email', '$nic', '$mobile', '$city', '$country')";
    
    $result = mysqli_query($conString, $query);
    if (!$result) {
        $error = mysqli_error('.//error.html');
        print $error;
        exit;
    } else {
        // header('Refresh: 2; url=successfull.php');
        header('location:../index.php');
        exit();
    }
}
