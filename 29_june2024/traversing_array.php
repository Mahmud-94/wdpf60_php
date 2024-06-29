<?php 
$country = array("Bangladesh" =>"Dhaka","Srilanka"=> "Colombo","Nepal"=> "Kathmundu","Maldives"=> "Maley");

while ($item = key($country)) {
    echo $item . "<br>";
    next($country);
    
}

?>