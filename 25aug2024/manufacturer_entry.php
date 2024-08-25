<?php $mysqli = new mysqli("localhost:3310","root","", "evidence"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        $mysqli->query("CALL add_manufacturer('$name','$address','$contact')");
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter manufacturer name"><br>
        <textarea name="address" id="" placeholder="enter address"></textarea><br>
        <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="manufacturer.php">entry</a>
</body>
</html>