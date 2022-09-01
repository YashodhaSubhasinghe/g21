<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/imagedisplay.css">

</head>

<body>
<?php
		require_once("../dbconnection/usercon.php");
        include("../dbconnection/dbcon.php");

        $query="SELECT * FROM image";

        $result=mysqli_query($conString,$query);
        
        if(mysqli_num_rows($result)>0)
		{
	?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Description</th>
                <th>PDescription</th>
            </tr>
        </thead>
        <tbody>
        <?php
		while($row=mysqli_fetch_assoc($result))
		{

		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td><img src='images/".$row['image']."' height='100px' alt='image'></td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['pdescription']."</td>";
		echo "</tr>";
	
		}
	?>
       
        </tbody>
    </table>

    <center><button style="border:1px solid #3498db;
			background:#3498db;
			padding:10px 20px;
			font-size:20px;
			cursor:pointer;
			margin:10px;
			transition:0.8s;
			width:10%;
			color:white;" onclick="location.href='admin.php'" >Back</button></center>
    <?php
		}
		else
		{
            echo '<script>alert("NO ROWS")</script>';
            header('location:admin.php');
		}

	?>
</body>

</html>