<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>
</head>
<body>

<div class="header">
  <img src="logo.jpg" alt="CSGO Howl" style="float:left";>
  <h1>Freshmart</h1>
  <p>Welcome</p>
</div>

<div class="topnav">
  <a onclick="location.href='customer.php'">Home</a>
  <a onclick="location.href='customerpoints.php'">My Points</a>
  <a onclick="location.href='help.php'">Help</a>
  <a onclick="location.href='facilities.php'">Facilities</a>
  <a onclick="location.href='../logout.php?logout'">Log Out</a>
</div>



</body>
</html>
