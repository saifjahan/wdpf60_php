<?php
$customers = array();
$customers[] = array("jason gilmore","jason@example.com", "12345678");
$customers[] = array("jason gilmore","jason@example.com", "12345678");
$customers[] = array("jason gilmore","jason@example.com", "12345678");

echo "<pre>";
foreach($customers as $customer){
  //  foreach($customers as $item){
       //echo $item . " ";
    //}
   // echo "<br>"
//}
list($name,$email,$phone)= $customer;
echo "Name: $name Email: $email Phone:$phone";
echo "<hr>";
}
?>