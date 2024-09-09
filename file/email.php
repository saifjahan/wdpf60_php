<?php  $mysqli = new mysqli("localhost:3310","root","","evidence1");?>

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
        $name= $_POST['name'];
        $password= $_POST['password'];
        $data = $mysqli->query("SELECT * FROM users WHERE email='$name' AND password = '$password'");
        if($data->num_rows ==0){
            echo "login valid";
        }else{
            echo " login not valid";
        }
    }
    
    ?>
    <form action="" method="post"></form>
    user name: <input type="text" name="name"><br>
    password: <input type="text" name="password"><br>
    <input type="submit" name="submit" value="login">
</body>
</html>