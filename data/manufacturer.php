<?php $mysqli = new mysqli("localhost:3310","root","","evidence")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entry</title>
</head>
<h2>list</h2>
<body>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['manu'];
    $mysqli->query("DELETE FROM manufacturer WHERE id = '$id'");
    if($mysqli->affected_rows){
        echo "successful delete";
    }

}
?>

    <?php 
    $result= $mysqli->query("SELECT * FROM manufacturer")
    ?>
    <form action="" method="post">
        <select name="manu" >
            <option value="">select one</option>
            <?php
            while($row = $result->fetch_object()){?>
            <option value="<?php echo $row->id;?>"><?php echo $row->name?></option>


<?php

            }
            
            ?>

        </select>
        <input type="submit" name="submit" value="delete">
    </form>
    <br><br>
    <a href="product.php">list</a>
</body>
</html>