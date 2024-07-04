<?php 

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");


 //$subset = array_slice($states, 4);
 //$subset = array_slice($states, 1, 2);
 $subset = array_slice($states, 3, -2);
 echo"<pre>";
 print_r($subset);

 ?>