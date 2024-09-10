<?php 
require_once "db_config.php";
session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $usertype = $_POST['usertype'];
}

if($usertype==1){
    $sql = $db->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
    if($sql->num_rows){
        // session
        $_SESSION['email'] = $email;
        $_SESSION['utype'] = $usertype;

        // Redirect
        header("location:dashbord.php");
    } 
}
if($usertype==2){
    $sql = $db->query("SELECT * FROM doctor WHERE email='$email' AND password='$password'");
    if($sql->num_rows){
        // session
        $_SESSION['email'] = $email;
        $_SESSION['utype'] = $usertype;
        header("location:doctor_dashbord.php");
        // Redirect
    } 

}

?>