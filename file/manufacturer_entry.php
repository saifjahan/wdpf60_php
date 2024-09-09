<?php  $mysqli = new mysqli("localhost:3310","root","","evidence1");?>


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
        $insert = $mysqli->query("CALL add_manufacturer('$name','$address','$contact')");
        if($insert){
            echo "successful insert";
        }
    }
    
    ?>
    <form action="" method="post">
        NAME: <input type="text" name="name"><br>
        ADDRESS: <textarea name="address" id=""></textarea><br>
        CONTACT: <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>