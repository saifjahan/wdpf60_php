<?php
 $e = 'e:';
 //printf("Remaining MB on %s: %.2f", $drive,
 //round((disk_free_space($drive) / 1048576), 2));
 //echo disk_free_space($drive)/1024/1024/1024;
 $free = disk_free_space($e);
 $total = disk_free_space($e);
 $used = $total - $free;
 echo $used/1024/1024/1024;
?>