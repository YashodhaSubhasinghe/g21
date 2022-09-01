<?php
$msg = "";
if (isset($_POST["imageadd"])) {

    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");

		$target="images/".basename($_FILES['image']['name']);
		$file=$_FILES['image']['name'];
		$description=$_POST['description'];
		$pdescription=$_POST['pdescription'];

		$query="INSERT INTO image(image,description,pdescription) VALUES ('$file','$description','$pdescription')";
        $result=mysqli_query($conString,$query);
    

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
		{
			$msg="IMAGE UPLOADED SUCCESSFULLY";
		}
		else
		{
			$msg="IMAGE NOT UPLOADED SUCCESSFULLY";
		}
	if(!$result) 
	{
			echo '<script>alert("Image added")</script>';
			$error = mysqli_error('.//error.html');
			print $error;
			exit;
	}
	else
	{
			echo '<script>alert("Image not added")</script>';
			header('location:admin.php');
			exit();
	}
	}