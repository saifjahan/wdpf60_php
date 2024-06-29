<?php
$state = "new jursey";
$states = ["california","hawaii","ohio","new york"];
if(in_array($state,$states)){
    echo "not to worry, $state is smoke-free !";
}
else{
    echo "not found";
}


?>