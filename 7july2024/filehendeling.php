<?php
// $fh =  fopen("files/users.txt",'r');

// echo fgets($fh);

$fh = fopen("files/users.txt",'a');
fwrite($fh,"hello everybody");
fclose($fh);
$fh = fopen("files/users.txt",'r');
while(!feof($fh)){
    echo fgets($fh) ."<br>";
}
    fclose($fh);
?>
