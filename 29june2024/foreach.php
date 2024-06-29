<?php
$fruits = array ("Mango","Orange","Apple","jackfruit");

foreach ($fruits as $x){
    echo $x . "<br>";
}
echo "<hr>";

//associative array
$student = array("Tanim"=>20, "Saif"=>19,"Abdullah"=>22);

foreach($student as $k=>$v){
    echo "$k:$v <br>";
}

?>