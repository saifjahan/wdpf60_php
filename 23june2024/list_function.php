<?php
$fruits = ["Mango", "Banana", "Lichi", "Jackfruit"];

list($var1,$var2,$var3,$var4) = $fruits;
echo $var1 ."<hr>";


?>

<?php
    
function retrieveuserProfile(){
    $user[] = "Saif jahan";
    $user[] = "jahansaif@gmail.com";
    $user[] = "Bangla";
    return $user;
}

list($name, $email, $language) = retrieveuserProfile();
echo "Name: {$name}<br> Email:{$email}<br> Language: {$language}";

?>