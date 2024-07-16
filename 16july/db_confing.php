<?php
$host = "localhost:3310";
$user = "root";

$password ="";
$db ="wepf601";
$con = new mysqli($host,$user,$password,$db);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is home page</h1>
    <?php
   $data = $con->query("SELECT * FROM students");
    echo "<pre>";

   $output = $data->fetch_assoc();
    print_r($output);
    
    
    ?>
</body>
</html>