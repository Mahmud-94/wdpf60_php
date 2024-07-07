<?php
 $c = 'c:';
 
 echo disk_free_space($c)/1024/1024/1024;

 $f = 'f:';

 echo "<hr>";

 echo disk_free_space($f)/1024/1024/1024;
 ?>