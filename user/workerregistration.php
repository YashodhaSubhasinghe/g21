<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["A"])) {
header("Location:../error.html");
exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/registration.css">

</head>

<body>

  <div class="box">
    <h2>Registration</h2>
    <div class="row">
      <div class="column">

        <form action="workerregister.php" method="post">

          <div class="inputBox"><br>
            <input type="text" name="username" required >
            <label>Username</label>
          </div>
          <div class="inputBox"><br>
            <input type="text" name="fname" required >
            <label>First Name</label>
          </div>
          <div class="inputBox"><br>
            <input type="text" name="mobile" required >
            <label>Mobile</label>
          </div>

          <div class="inputBox"><br>
            <input type="password" name="password" required >
            <label>Password</label>
          </div>
          <div class="inputBox"><br>
            <input type="text" name="city" required >
            <label>City</label>
          </div>

          <input type="submit" name="register" value="Sign Up">
          <span class="psw"> <input type="checkbox" checked="checked" name="remember"> Remember me </span>

      </div>

      <div class="column">


        <div class="inputBox"><br>
          <input type="text" name="email" required >
          <label>Email</label>
        </div>


        <div class="inputBox"><br>
          <input type="text" name="lname" required >
          <label>Last Name</label>
        </div>

        <div class="inputBox"><br>
          <input type="text" name="nic" required >
          <label>NIC</label>
        </div>
        <div class="inputBox"><br>
          <input type="password" name="conf_password" required >
          <label>Confirm Password</label>
        </div>
        <div class="inputBox"><br>
          <input type="text" name="country" required>
          <label>Country</label>
        </div>



        <button type="button" class="cancelbtn" onclick="location.href='admin.php'">Cancel</button>
      </div>
      </form>
    </div>

</body>

</html>