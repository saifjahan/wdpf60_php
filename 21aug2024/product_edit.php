
<?php require_once("dbconfig.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>product edit</h3>


    <?php
    $sql = "SELECT * FROM categories";
    $cats = $db->query($sql);



$id = $_REQUEST['id'];

//print_r($row);

    
    if(isset($_POST['update'])){
        extract($_POST);
       
        $sql = "UPDATE product SET product_name= '$product', product_datails= '$details', product_price= '$price', product_quantity= '$quantity' product_categories='$categories'  WHERE id ='$id'"; 
    

 $result =   $db->query($sql);
if($db->error){
    echo "failed";
}else{
    echo "success";
}


    }
    $sql = "SELECT * FROM product WHERE id = '$id'";
$data = $db->query($sql);
$row = $data->fetch_object();
    
    ?>


<form action="" method="post">
product name: <input type="text" name="product"  value="<?php echo $row->product_name;?>"><br>
product details: <textarea name="details" id="" ><?php echo $row->product_datails?></textarea><br>
product price: <input type="text" name="price" value="<?php echo $row->product_price;?>"><br>
product quantity: <input type="text" name="quantity" value="<?php echo $row->product_quantity;?>"><br>
<select name="categories" id="">
    <option value="">select one</option>
    <?php
    while($cat = $cats->fetch_assoc()){?>
         <option value= "<?php echo $cat['cat_id']?>" <?php echo $row->product_categories==$cat['cat_id']?"selected": " ";?>><?php echo $cat['name']?></option>

        <?php
    }
    ?>
</select>

<input type="submit" name="update" value="update">
<input type="hidden" name="id" value="<?php echo $id?>">

</form>
<a href="all_products.php">product list</a>

</body>
</html>