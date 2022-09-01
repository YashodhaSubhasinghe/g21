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
			color:white;" onclick="location.href='worker.php'" >Back</button>

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
		<form action="" method="POST">
			<input type="text" name="user_name" value="<?php echo $row['user_name'] ?>"><br><br><br>
			<input type="text" name="points" value="<?php echo $row['points'] ?>"><br><br><br>
		
			<input type="submit"name="update" value="Update"><br><br>

        </form>
	</div>

                
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
	$points=$_POST["points"];
	
	$query="UPDATE points SET user_name='$_POST[user_name]',points='$_POST[points]' WHERE user_name='$_POST[user_name]' ";
	$result=mysqli_query($conString,$query);

	if($result)
	{
		echo '<script> alert("Data updated")</script>';
	}
	else
	{
		printf("error:%s\n",mysqli_error($conString));
	}
}
?>

<?php