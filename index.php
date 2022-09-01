<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

 <div class="box">
<h2>User Login</h2>

<form action="./pages/login.php" method="post">
  
    <div class="inputBox"><br>
      <input type="text" name="username" required >
      <label>Username</label>
    </div>
 <div class="inputBox"><br>
      <input type="password" name="password" required >
      <label>Password</label>
</div>
    <input type="submit" name="login" value="Login">

    
<br>
<br>
    
<div class="container" ><br>
    <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button>
    <span class="psw">Not a member? <a href="registration.php">Sign up</a></span>
  </div>
  </form>

</body>
</html>
