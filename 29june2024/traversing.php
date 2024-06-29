<?php
$country = array("Bangladesh"=>"Dhaka",
                "Srilanka"=>"colombo",
                "uganda"=>"kampala",
                "nepal"=>"kathmondo"
                );

    while($item = key($country)){
        echo $item . "<br>";
        next($country);
    }

?>