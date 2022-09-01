<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["A"])) {
header("Location: ../error.html");
exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/adminadd.css">

</head>

<body>
	<center>
		
		<form action="" method="POST">
			<input type="text" name="user_name"  placeholder="Enter Username"><br><br>
			<input type="submit" name="search" value="Search"><br><br>
		</form>
		<button style="border:1px solid #3498db;
			background:#3498db;
			padding:10px 20px;
			font-size:20px;
			cursor:pointer;
			margin:10px;
			transition:0.8s;
			width:10%;
			color:white" onclick="location.href='admin.php'" >Back</button>
		<?php
        
        	if (isset($_POST["search"])) {

    		require_once("../dbconnection/usercon.php");
    		include("../dbconnection/dbcon.php");

    		$user_name=$_POST['user_name'];
			$query="SELECT  * FROM users_info WHERE user_name='$user_name'";
    		$result=mysqli_query($conString,$query);
    
    		while($row=mysqli_fetch_array($result))
			{
		?>
				
			<div class="box">
				<form action="" method="POST">
				<div class="inputBox">	<input type="text" name="user_name" value="<?php echo $row['user_name'] ?>"></div>
				<div class="inputBox"><input type="text" name="role" value="<?php echo $row['role'] ?>"></div>
				<div class="inputBox">  <input type="text" name="fname" value="<?php echo $row['fname'] ?>"></div>
				<div class="inputBox">  <input type="text" name="lname" value="<?php echo $row['lname'] ?>"></div>
				<div class="inputBox">  <input type="hidden" name="password" value="<?php echo $row['password'] ?>"></div>
				<div class="inputBox">  <input type="text" name="email" value="<?php echo $row['email'] ?>"></div>
				<div class="inputBox">  <input type="text" name="nic" value="<?php echo $row['nic'] ?>"></div>
				<div class="inputBox">  <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"></div>
				<div class="inputBox">  <input type="text" name="city" value="<?php echo $row['city'] ?>"></div>
				<div class="inputBox">  <input type="text" name="country" value="<?php echo $row['country'] ?>"></div>
		
				<div class="inputBox">	<input type="submit"name="update" value="Update"></div><br>
				<div class="inputBox">	<input type="submit" name="delete" value="Delete"></div>
				</form>
			</div>
				
		</center>
		<?php			
			}

		
		}

		?>
	
</body>

</html>

<?php
    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");


if(isset($_POST['update']))
{	
	$user_name = $_POST["user_name"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $mobile = $_POST["mobile"];
    $city = $_POST["city"];
    $country = $_POST["country"];
	
	$query="UPDATE users_info SET user_name='$_POST[user_name]',fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',nic='$_POST[nic]',mobile='$_POST[mobile]',city='$_POST[city]',country='$_POST[country]' WHERE user_name='$_POST[user_name]' ";
	$result=mysqli_query($conString,$query);

	if($result)
	{
		echo '<script> alert("Data updated")</script>';
	}
	else
	{
		printf("error:%s\n",mysqli_error($connection));
	}
}
?>

<?php



if(isset($_POST['delete']))
{
	$id=$_POST['id'];

	$query="DELETE FROM users_info WHERE user_name='$_POST[user_name]'";
	$result=mysqli_query($conString,$query);

	if($query)
	{
		echo '<script>alert("RECORD DELETED")</script>';
	}
	else
	{
		echo '<script>alert("Not deleted")</script>';
	}
	
}
?>