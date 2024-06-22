<?php
$value1 = "hello";
$value2 =& $value1;

$value2 = "Goodbye";

echo $value1;
$value1 = "Today is last class before eid";

echo $value2;
?>