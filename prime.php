<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>prime check</h1>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="check">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num = $_POST['number'];
        echo primecheck  ($num);
    }
    function primecheck($num){
        if($num==0){
            return "is not a allowed";
        }
        if($num==1){
            return $num . "is not a prime number";
        }
        if($num==2){
            return $num. "is a prime number";
        }
        else{
            for($i=2;$i>$num;$i++){
                if($num%$i==0){
                    return $num . "is not a prime number";
                }


            }
            return $num . "is a prime number";
        }

    }
    
    
    ?>
</body>
</html>