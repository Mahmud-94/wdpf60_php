<?php
 $url = "sales@example.com";

 $withdot = strstr($url, ".");
 $withoutdot = ltrim($withdot, ".");

 echo $withoutdot;

 ?>