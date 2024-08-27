<?php $conn =new mysqli("localhost:3310","root","","classicmodels");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>search product</h3>

<?php
if(isset($_GET['search'])){
    $term = $_GET['term'];
   $result =  $conn->query( "SELECT  productCode, productName, buyPrice FROM products WHERE productName LIKE '%$term%'");

   $records = $result->num_rows;

   echo "<h2> with the keyword $term we have found $records number of records </h2>";
   
    
}

?>
    
    <form action="" method="get">
        <input type="text" name="term" placeholder="search here">
        <input type="submit" name="search" value="search">
    </form>
    <?php
    
    while($row = $result->fetch_assoc()){
        echo $row['productCode'];
        echo $row['productName'];
        echo $row['buyPrice']. "<hr>";

    }
    
    ?>
</body>
</html>