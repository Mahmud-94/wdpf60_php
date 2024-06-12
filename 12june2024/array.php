<?php

//Numeric indexed array
$rivers = array("Padma", "meghna", "Jamuna", "Surma");
echo "<pre>";
print_r($rivers);

$rivers[]= "Tista";
$rivers[]= "Gomti";
print_r($rivers);


//associative array

//$capitals = ["Bangladesh"=> "Dhaka", "Srilanka"=> "Colombo", "Nepal"=> "Kathmandu"];
//print_r($capitals);

$capitals =array ("Bangladesh"=> "Dhaka", "Srilanka"=> "Colombo", "Nepal"=> "Kathmandu");
print_r($capitals);

$capitals["Bhutan"] = "Thimpu";
print_r($capitals);


?>