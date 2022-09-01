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

        $query="SELECT * FROM users_info";

        $result=mysqli_query($conString,$query);
        
        if(mysqli_num_rows($result)>0)
		{
	?>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Role</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Password</th>
                <th>Email</th>
                <th>NIC</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Country</th>

            </tr>
        </thead>
        <tbody>
        <?php
		while($row=mysqli_fetch_assoc($result))
		{

            echo "<tr>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['lname']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['nic']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['country']."</td>";
            echo "</tr>";
	
		}
	?>
       
        </tbody>
    </table>
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
		}
		else
		{
			echo '<script>alert("NO ROWS")</script>';
		}

	?>
</body>

</html>