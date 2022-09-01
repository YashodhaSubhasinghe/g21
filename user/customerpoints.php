<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["C"])) {
header("Location: ../error.html");
exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
		body{
	background-color:#676776;
}



input[type="submit"]{
	border:none;
	border-radius:25px;
	outline:none;
	width:30%;
	height:6%;
	background:black;
	color:#fff;
	height:30px;
}

input[type="submit"]:hover{
	color:white;
	background:blue;
}

input[type="text"]{
	outline:none;
	margin-top:10px;
	width:30%;
	height:6%;

}

.box {
	position: absolute;
	top: 30%;
	left: 35%;
	width: 25rem;
	padding: 2.5rem;
	box-sizing: border-box;
	background: black;
	border-radius: 0.625rem;
  }




.box .inputBox {
	position: relative;
  }
  
  .box .inputBox input {
	width: 100%;
	padding: 0.625rem 0;
	font-size: 1rem;
	color: #fff;
	letter-spacing: 0.062rem;
	margin-bottom: 1.875rem;
	border: none;
	border-bottom: 0.065rem solid #fff;
	outline: none;
	background: transparent;
  }
  
  
  
  .box input[type="submit"] {
	border: none;
	outline: none;
	color: #fff;
	background-color: #03a9f4;
	padding: 0.625rem 1.25rem;
	cursor: pointer;
	border-radius: 0.312rem;
	font-size: 1rem;
  }
  
  



  </style>

</head>

<body><div>
<?php include 'header.php' ?>
</div>
<center>
	<div style="height:100%">
	<form action="" method="POST">
		<input type="text" name="user_name"  placeholder="Enter Username"><br><br>
		<input type="submit" name="search" value="Search"><br><br>
	</form>
	
	<?php
        
		if (isset($_POST["search"])) 
		{

    		require_once("../dbconnection/usercon.php");
    		include("../dbconnection/dbcon.php");

   	 		$user_name=$_POST['user_name'];
			$query="SELECT  * FROM points WHERE user_name='$user_name'";
    		$result=mysqli_query($conString,$query);
    
    		while($row=mysqli_fetch_array($result))
			{
	?>
				
	<div class="box">
		<form action="saledetailscustomer.php" method="POST">
			<div class="inputBox"><input type="text" name="user_name" value="<?php echo $row['user_name'] ?>"></div><br>
			<div class="inputBox"><input type="text" name="points" value="<?php echo $row['points'] ?>"></div><br>
		
			
			<div class="inputBox"><input type="submit"name="searchsales" value="View purchases"></div><br><br>
						
		</form>
	</div>
	</div>
</center>
                
	<?php			
			}

		
		}

	?>
	<div>
	<?php include 'footer.php' ?>
	</div>
</body>

</html>

<?php

	//if (isset($_POST["searchsales"])) 
	//{
	//	header('location:saledetailscustomer.php?usercreation=user successfully created!');

    //	require_once("../dbconnection/usercon.php");
	//	include("../dbconnection/dbcon.php");

	//}
?>


