<?php $mysqli = new mysqli("localhost:3310","root","","evidence")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qun.1</title>
</head>
<body>
    <h1>above 5000</h1>
    <?php
    $data = $mysqli->query("SELECT * FROM product_above_5000_price")
    
    ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>manufacturer_id</th>
        </tr>
        <?php
        while($row = $data->fetch_assoc()){?>
            <tr>
               
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['manufacturer_id']?></td>
            <?php

        }
        
        ?>
    </table>
    <br><br>
    <a href="manufacturer.php">manufacturer</a>
</body>
</html>