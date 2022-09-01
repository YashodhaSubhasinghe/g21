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
			<input type="text" name="id"  placeholder="Enter ID"><br><br>
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
			color:white;" onclick="location.href='admin.php'" >Back</button>
	<?php
        
    if (isset($_POST["search"])) {

    	require_once("../dbconnection/usercon.php");
    	include("../dbconnection/dbcon.php");
	
    	$id=$_POST['id'];
		$query="SELECT  * FROM image WHERE id='$id'";
    	$result=mysqli_query($conString,$query);
    
    	while($row=mysqli_fetch_array($result))
			{
	?>
				
		<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>"><br>
				<?php echo "<input type='file' id='file' name='image' id='image'><img src='images/".$row['image']."' height='100px' alt='image'>"; ?>
               
				<div class="inputBox">  <input type="text" name="description" value="<?php echo $row['description'] ?>"></div>
				<div class="inputBox">  <input type="text" name="pdescription" value="<?php echo $row['pdescription'] ?>"></div>
		
				<input type="submit"name="update" value="Update"><br><br>
				<input type="submit" name="delete" value="Delete"><br><br>

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
	$id=$_POST['id'];
	$description=$_POST['description'];
	$pdescription=$_POST['pdescription'];

	if(!empty($_FILES['image']['name']))
	{
		$image=$_FILES['image']['name'];
		$target="images/".basename($image);

		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
		{
			echo "Image updated";
		}
		else
		{
			echo "Image not updated";
		}
	}
	else
	{
		$image=$_POST['image'];
	}
	$query="UPDATE image SET image='$image',description='$_POST[description]',pdescription='$_POST[pdescription]' WHERE id='$_POST[id]' ";
	$result=mysqli_query($conString,$query);

	if($result)
	{
		echo '<script> alert("Data updated")</script>';
		header('location:imageedit.php');
	}
	else
	{
		printf("error:%s\n",mysqli_error($connection));
		header('location:admin.php');
	}
}
?>

<?php



if(isset($_POST['delete']))
{
	$id=$_POST['id'];

	$query="DELETE FROM image WHERE id='$_POST[id]'";
	$result=mysqli_query($conString,$query);

	if($query)
	{
		echo '<script>alert("RECORD DELETED")</script>';
		//header('refresh=1;url="./imageedit.php"');
		header('loaction:imageedit.php');
	}
	else
	{
		echo '<script>alert("Not deleted")</script>';
		header('location:imageedit.php');
	}
	
}
?>