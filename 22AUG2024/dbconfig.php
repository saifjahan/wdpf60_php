<?php 

define("HOST","localhost:3310");
define("USR","root");
define("PASS","");
define("DATABASE", "wepf601");

$db = new mysqli();
@$db->connect(HOST, USR, PASS);
@$db->select_db(DATABASE);

    if($db->connect_errno){
        echo $db->connect_error;
        exit();
    }
    echo $db->error;






?>