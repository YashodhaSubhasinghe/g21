<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["A"])) {
header("Location: ../error.html");
exit;
}
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<button class="b" onclick="location.href='workerregistration.php?workerregistration'" >Register worker</button><br><br>
		<button class="b" onclick="location.href='viewalltable.php?viewalltable'">View all</button><br><br>
		<button class="b" onclick="location.href='editall.php?viewall'">Edit users</button><br><br>
		<button class="b" onclick="location.href='imageaddition.php?imageaddition'">Add image</button><br><br>
		<button class="b" onclick="location.href='imagedisplay.php?imagedisplay'">View image</button><br><br>
		<button class="b" onclick="location.href='imageedit.php?imageedit'">Edit images</button><br><br>
		<button class="b" onclick="location.href='../logout.php?logout'">Logout</button><br><br>

	</div>

  

</body>
</html>