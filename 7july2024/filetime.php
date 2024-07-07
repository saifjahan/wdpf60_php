<?php
 $file = 'files/users.txt';

 //echo date("m-d-y g:i:sa",fileatime($file));
 echo " Last Created Time:". date("m-d-y g:i:sa",fileatime($file))."<br>";
 echo " LastModified Time:". date("m-d-y g:i:sa",fileatime($file))."<br>";
 echo " LastAccess Time:". date("m-d-y g:i:sa",fileatime($file))."<br>";
 ?>
