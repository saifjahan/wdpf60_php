<?php
 //$url = "sales@example.com";
 $url = "abc.jpg";
 $withdot = strstr($url,".");
 $withoutdot = ltrim($withdot,".");
 echo $withoutdot;
 //echo ltrim(strstr($url, "@"),"@");
?>
