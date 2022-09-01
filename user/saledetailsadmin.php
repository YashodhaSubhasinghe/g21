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

    $query="SELECT * FROM sales_inf";

    $result=mysqli_query($conString,$query);
        
    if(mysqli_num_rows($result)>0)
    {
?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Total cost</th>
                <th>Date</th>
                

            </tr>
        </thead>
        <tbody>
        <?php
		while($row=mysqli_fetch_assoc($result))
		{

		    echo "<tr>";
            echo "<td>".$row['saleid']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['totalcost']."</td>";
            echo "<td>".$row['date']."</td>";
		    echo "</tr>";
	
		}
	    ?>
       
        </tbody>
    </table>
   <center> <button style="border:1px solid #3498db;
			background:none;
			padding:10px 20px;
			font-size:20px;
			cursor:pointer;
			margin:10px;
			transition:0.8s;
			width:10%;
			color:#3498db" onclick="location.href='admin.php'" >Back</button></center>
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