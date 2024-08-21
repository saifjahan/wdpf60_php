<?php
require_once("dbconfig.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>product list</h3>
    <?php
    //$sql = "SELECT * FROM product";
    $sql = "SELECT *FROM product, categories WHERE categories.cat_id = product.product_categories";
    $data = $db->query($sql);?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>product</th>
            <th>details</th>
            <th>price</th>
            <th>quantity</th>
            
            <th>categories</th>
            <th>action</th>
        </tr>
<?php
    while($row = $data->fetch_assoc()){?>
                <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['product_name']?></td>
            <td><?php echo $row['product_datails']?></td>
            <td><?php echo $row['product_price']?></td>
            <td><?php echo $row['product_quantity']?></td>
            <td><?php echo $row['name']?></td>
            <td><a onclick="return confirm('are you sure to delete')" href="product_delete.php?id=<?php echo $row['id']?>">delete</a>
            <a href="product_edit.php?id=<?php echo $row['id']?>">edit</a></td>


        </tr>

    <?php    
    }
    
    ?>
    </table>

    <br>
    <a href="product_entry.php">new product entry</a>
</body>
</html>