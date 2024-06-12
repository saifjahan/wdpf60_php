<?php

//Numeric indexed array
$rivers = array("padma", "Meghna", "jamuna", "surma");
echo "<pre>";
print_r($rivers);

$rivers[] = "Tista";
$rivers[] = "Gomti";
print_r($rivers);
echo "<hr>";



//associative array

$capitals = ["Bangladesh"=>"Dhaka","Srilanka"=>"colombo","Napal"=>"Katmondu"];
print_r($capitals);

?>