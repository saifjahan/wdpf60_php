<?php
$divisions = [
    "Dhaka" => array("population"=>"10k","spot"=>"Buriganga","Food"=>"singara"),
    "Rajshahi" => array("population"=>"5k","spot"=>"ambagan","Food"=>"mango"),
    "Khulna" => array("population"=>"4k","spot"=>"sundarban","Food"=>"hony")
];
echo $divisions["Khulna"]["Food"] . "<hr>";
print_r($divisions);

?>