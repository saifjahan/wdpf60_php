<?php $mysqli = new mysqli("localhost:3310","root","","evidence")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>que.3</title>
</head>
<h3>manufacturer_add</h3>
<body>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        $insert= $mysqli->query("CALL add_manufacturer('$name','$address','$contact')");

        if($insert){
            echo "successful insert";
        }
    }
    
    ?>
    <form action="" method="post">
        name: <input type="text" name="name"><br>
        address: <textarea name="address" id=""></textarea><br>
        contact: <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br><br>
    <a href="manufacturer.php">manufacturer_add</a>
</body>
</html>