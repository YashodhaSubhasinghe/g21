<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["W"])) {
header("Location:../error.html");
exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		body{
			margin:o;
			padding:0;
			background-image: url("worker.jpeg"); 
			background-position: center; 
  		background-repeat: no-repeat;
  		background-size: cover;
		}

		.box{
			text-align:center;
			margin-top:100px;
		
		}

		.b{
			border:1px solid #3498db;
			background:none;
			padding:10px 20px;
			font-size:20px;
			cursor:pointer;
			margin:10px;
			transition:0.8s;
			width:10%;
			color:#3498db
			
		}
		.b:hover{
			background:#3498db;
			color:white;
		}
	</style>
</head>
<body>
    <div class="box">
	<br><br>
    <button class="b" onclick="location.href='workerdisplay.php'">Sale</button><br><br><br>
    <button class="b" onclick="location.href='pointsaddition.php'">New addition</button><br><br><br>
	<button class="b" onclick="location.href='workercustomerpoints.php'">Points Change</button><br><br><br>
    <button class="b" onclick="location.href='../logout.php?logout'">Logout</button><br><br><br>
    </div>
   
</body>
</html>