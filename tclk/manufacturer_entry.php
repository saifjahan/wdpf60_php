<?php $mysqli = new mysqli("localhost:3310","root","","tclk60");?>

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
        if($mysqli->query("CALL add_manufacturer('$name','$address','$contact')")){
            echo "successful added";

        }else{
            echo "failed to add";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter manufacturer name"><br>
        <textarea name="address" id=""></textarea><br>
        <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="manufacturer.php">manufacturer</a>
    <a href="product.php">product</a>
</body>
</html>