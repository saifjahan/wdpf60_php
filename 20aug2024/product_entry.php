
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>product entry</h3>


    <?php
    
    if(isset($_POST['submit'])){
        extract($_POST);
       
        $sql =   "INSERT INTO product (id, product_name, product_datails, product_price	, product_quantity) VALUES ( NULL,'$product','$details','$price','$quantity')"; 
    
require_once("dbconfig.php");
 $result =   $db->query($sql);
if($db->affected_rows){
    echo "successfully added";
}else{
    echo "failed";
}


    }
    
    ?>


<form action="" method="post">
product name: <input type="text" name="product"><br>
product details: <textarea name="details" id=""></textarea><br>
product price: <input type="text" name="price"><br>
product quantity: <input type="text" name="quantity"><br>
<input type="submit" name="submit" value="submit">

</form>
<a href="all_products.php">product list</a>

</body>
</html>