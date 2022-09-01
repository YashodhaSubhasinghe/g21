<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["W"])) {
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

        <form action="salesadd.php" method="post">

          <div class="inputBox"><br>
            <input type="text" name="user_name" required>
            <label>Username</label>
          </div>
         

          <input type="submit" name="register" value="Add">
          

      </div>

      <div class="column">


        <div class="inputBox"><br>
          <input type="text" name="totalcost" required>
          <label>Bill</label>
        </div>


        <button type="button" class="cancelbtn" onclick="location.href='worker.php'">Back</button>
      </div>
      </form>
    </div>

</body>

</html>