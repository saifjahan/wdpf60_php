<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>factorial</h1>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="check">
    </form>
    <?php
    
    if(isset($_POST['submit'])){
        $num = $_POST['number'];
    echo factorial($num);
    
    }
    function factorial($num){
        $fact = 1;
        for($i=$num;$i>=1; $i--){
            $fact = $fact * $i;


        }
        echo "factorial of $num is =" . $fact;
    }
    
    
    ?>
</body>
</html>