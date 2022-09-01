<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/homepageoffers.css">

</head>

<body>
<?php
        require_once("../dbconnection/usercon.php");
        include("../dbconnection/dbcon.php");

        $query="SELECT * FROM image";

        $result=mysqli_query($conString,$query);
        
        if(mysqli_num_rows($result)>0)
        {	
            while($row=mysqli_fetch_assoc($result))
            {
                
                echo "<div class='products products-table'>";
                echo "<div class='product'>";
                echo  "<div class='product-img'>";
                echo "<img src='images/".$row['image']."' alt='image'>";
                echo "</div>";
                echo "<div class='product-content'>";
                echo "<h2>";
                echo "<small>".$row['description']."</small>";
                echo "</h2>";
                echo "<p class='product-text price'>".$row['pdescription']."</p>";
                echo "</div>";
                echo "</div>";
                
                

            }
          }
          else
          {
            echo '<script>alert("NO ROWS")</script>';
            header('location:customer.php');
          }
          
?>
</body>
</html>
