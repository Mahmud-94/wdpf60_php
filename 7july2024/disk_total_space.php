<?php
 $c = 'c:';
 
 $free = disk_free_space($c)/1024/1024/1024;
 $total = disk_total_space($c)/1024/1024/1024;


 $used = $total - $free;

 echo $used/1024/1024/1024;

 ?>

