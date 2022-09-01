<?php
    
    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");
    session_start();
    if(isset($_POST['login'])){
        if(empty($_POST['username'])|| empty($_POST['password'])){
            header("location:../index.php");
        }else{
            $query = "SELECT role FROM users_info WHERE user_name = '".$_POST['username']."' AND password = '".$_POST['password']."'";
            $result = mysqli_query($conString,$query);
            while ($row = mysqli_fetch_array($result)) {
                    $role = $row["0"];
                }
            if(mysqli_affected_rows($conString) > 0){
                if($role == 'C'){
                    $_SESSION['C']=$role;
                    header("Location:../user/customer.php");
                    exit;
                }else if($role == 'W'){
                    $_SESSION['W']=$role;
                    header("Location:../user/worker.php");
                    exit;
                }else if($role == 'A'){
                    $_SESSION['A']=$role;
                    header("Location:../user/admin.php");
                    exit;
                }else{
                    echo 'Unauthorized Access!';
                }
            }else{
                header("location:../index.php?invalid=invalid login credentials");
            }
        }
    }
?>


