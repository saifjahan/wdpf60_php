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
    $id = $_POST['company'];
    $mysqli->query("DELETE FROM manufacturer WHERE id = '$id'");
    if($mysqli->affected_rows){
        echo "<h1>successfully Deleted</h1>";
    }
}

?>
    <?php
    $result= $mysqli->query("SELECT * FROM  manufacturer");
    ?>
    <h3>all manufacturer</h3>
    <form action="" method="post">
        <select name="company" >
            <option value="">select one</option>
            <?php
            while($row = $result->fetch_object()){?>

            <option value="<?php echo $row->id;?>"><?php echo $row->name ;?></option>

                <?php
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Delete">
    </form>
    <br>
    <a href="product.php">all product</a>
</body>
</html>