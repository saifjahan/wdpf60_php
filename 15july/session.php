<?php
session_start();
 if(!isset($_SESSION['email'])){
    header("location:login.php");
 }


  ?>




<!DOCTYPE html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is home page</title>
</head>
<body>
    <a href="logout.php">logout</a>
    
</body>
</html>