<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if(!isset($_SESSION["C"])) {
header("Location: ../error.html");
exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div>
<?php include 'header.php' ?>
</div><div>
 <?php include 'homepageoffers.php' ?>
 </div> 
<?php include 'footer.php' ?>
    
</body>
</html>