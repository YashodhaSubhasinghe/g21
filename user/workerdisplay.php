<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["W"])) {
header("Location:../error.html");
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
	<h2>Enter Username</h2>
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
			color:white" onclick="location.href='worker.php'" >Back</button>
	
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
					<div class="inputBox">	<input type="hidden" name="user_name" value="<?php echo $row['user_name'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="role" value="<?php echo $row['role'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="fname" value="<?php echo $row['fname'] ?>"></div><br>
					<div class="inputBox"> <input type="text" name="lname" value="<?php echo $row['lname'] ?>"></div><br>
					<div class="inputBox">   <input type="hidden" name="password" value="<?php echo $row['password'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="email" value="<?php echo $row['email'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="nic" value="<?php echo $row['nic'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="city" value="<?php echo $row['city'] ?>"></div><br>
					<div class="inputBox"><input type="text" name="country" value="<?php echo $row['country'] ?>"></div><br>

					<div class="inputBox"><input type="submit"name="next" value="Next"></div><br><br>
					<div class="inputBox"><a href="admin.php"><input type="submit" name="cancel" value="Cancel"></div><br><br>
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

if (isset($_POST["next"])) {
	header('location:workerbill.php?usercreation=user successfully created!');

    require_once("../dbconnection/usercon.php");
	include("../dbconnection/dbcon.php");

}
?>

