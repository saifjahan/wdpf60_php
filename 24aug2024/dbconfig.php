<?php
define("HOST","localhost");
define("USR","root");
define("PASS","");
define("DATABASE","evidence");
$db = new mysqli();
@$db->connect(HOST,USR,PASS);
@$db->select_db(DATABASE);
if($db->connect_errno){
    echo $db->connect_error;
}
echo $db->connect_error;


?>