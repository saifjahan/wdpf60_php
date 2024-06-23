<?php
$data = file("user.txt");
//echo "<pre>";
//print_r($data);
echo "<table border='1'>";
echo "<tr><th>name</th><th>profession</th><th>color</th></tr>";
foreach($data as $item){
$line = explode("|", $item);
list($name,$prof,$color) = $line;
echo "<tr><td>$name</td><td>$prof</td><td>$color</td></tr>";


//echo "<pre>";
//print_r($line); 

    //print $item . "<br>";
}


?>