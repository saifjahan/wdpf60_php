<?php
include_once("dbconfig.php");

session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

   $result = $db->query("SELECT * FROM users WHERE email = '$email' AND password= '$password'");
   $row= $result->fetch_assoc();
   if($result->num_rows==0){
    $_SESSION['login_err'] = "email or password may wrong. please try again";
    header("location: index.php");

   }else{
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row['fullname'];

    header("location:deashboad.php");

   }
}

?>