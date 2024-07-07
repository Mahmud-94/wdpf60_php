<?php
 $file = 'files/users.txt';

 //echo fileatime($file);

 echo "<br>";
 echo "Created time: " . date("m-d-y  g:i:sa", fileatime($file)) . "<br>";
 echo "Modified time: " . date("m-d-y  g:i:sa", fileatime($file)) . "<br>";
 echo "Access time: " . date("m-d-y  g:i:sa", fileatime($file));

 
 ?>