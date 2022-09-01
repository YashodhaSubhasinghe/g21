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
  <link rel="stylesheet" href="../css/imageadd.css">

</head>

<body>
  <center>	
	
	  <div class="box">
		  <h2>Adding image</h2>
		  <form action="imageadd.php" method="POST" enctype="multipart/form-data">
			  
			  <div class="labelbox">
			    <input type="file" id="file" name="image" id="image">
			    <label for="file">Choose image</label>
			  </div>
			  <br><br><br><br>
			  
			  <div class="">
			    <label>Enter description</label>
			    <textarea name="description" cols="40" rows="4"></textarea>
			  </div>
			  <br><br>

			  <div class="">
			    <label>Enter pdescription</label>
			    <textarea name="pdescription" cols="40" rows="4"></textarea>
			  </div><br><br>

			  <input type="submit" value="ADD" name="imageadd"><br<br>
			 

		  </form>
		  
		 
		  </div>
		  
	</center>
	<button style="border:1px solid #3498db;
			background:#3498db;
			padding:10px 20px;
			font-size:20px;
			cursor:pointer;
			margin:10px;
			transition:0.8s;
			width:10%;
			color:white;" onclick="location.href='admin.php'" >Back</button>

</body>
</html>