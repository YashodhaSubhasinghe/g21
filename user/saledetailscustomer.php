<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/adminadd.css">
  <link rel="stylesheet" href="../css/imagedisplay.css">

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
			color:white;" onclick="location.href='customer.php'" >Back</button>
    <?php
       
       if(isset($_POST['search']))
       {
            require_once("../dbconnection/usercon.php");
            include("../dbconnection/dbcon.php");

            $user_name=$_POST['user_name'];
            $query="SELECT * FROM sales_inf WHERE user_name='$user_name'";

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
    <?php
		    }
		    else
		    {
            echo '<script>alert("NO ROWS")</script>';
            header('location:customerpoints.php');
            }
        
    
        }
	?>
    </center>
</body>

</html>