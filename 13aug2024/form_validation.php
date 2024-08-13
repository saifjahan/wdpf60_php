<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>registration form</h1>
    <?php

    if(isset($_REQUEST['submit'])){
        $msg = form_validation();
        //print_r($msg);
        if($msg){
            echo "<ul>";
            foreach($msg as $m){
                echo "<li>$m</li>";
            }
            echo "</ul>";

        }else{
            echo "validation ok";
        }
    }

    function form_validation(){
$errors = [];

       $fullname =  $_REQUEST['fullname'];
       
       $district = $_REQUEST['district'];
       $address = $_REQUEST['address'];

       $fullname =  $_REQUEST['fullname'];
       if($fullname==""){
        $errors[] = "you must enter fullanme";
       }
       
      $district = $_REQUEST['district'];
      if($district==""){
        $errors[] = "you must select a district";
      }
      $address = $_REQUEST['address'];
      if($address==""){
        $errors[] = "you must select a address";
      }




      $hobbies = $_REQUEST['hobbies'];
      if(empty($hobbies)){
        $errors[] = "you must select one ";
      }
       
       return $errors;
        
    }
    
    ?>






    <form action="" method="post">


    


    name <br>
    <input type="name" name="fullname" placeholder="enter your name"><br>
    gender <br>
    <input type="radio" name="gender" value="male" checked>male
    <input type="radio" name="gender" value="male">female <br>
    district <br>
    <select name="district" id="">
        <option value="">select one</option>
        <option value="dhaka">dhaka</option>
        <option value="rajshahi">rajshahi</option>
        <option value="pabna">pabna</option>

    </select><br>
    hobbies <br>
    <input type="checkbox" name="hobbies[]" value="cricket" checked>cricket
    <input type="checkbox" name="hobbies[]" value="footbal">footbal
    <input type="checkbox" name="hobbies[]" value="tenis">tenis <br>
    address <br>
    <textarea name="address" placeholder="enter address"></textarea><br>
    <input type="submit" name="submit" value="register">
    </form>
</body>
</html>