<?php $mysqli = new mysqli("localhost:3310","root","", "evidence"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>all product (above 5000 price)</h3>
<?php

$data = $mysqli->query("SELECT  * FROM  product_above_5000_price");


?>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
    </tr>
    <?php
    while($row = $data->fetch_assoc()){?>
<tr>
    <td><?php  echo $row['id']?></td>
    <td><?php  echo $row['name']?></td>
    <td><?php  echo $row['price']?></td>
</tr>

    <?php
    }
    
    ?>
</table>
<br>
<a href="manufacturer.php">all manufacturer</a>
</body>
</html>