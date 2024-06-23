<?php
$divisions = [
    "Dhaka" => array(
        "population" => "30m",
        "Spot" => "Buriganga",
        "Food" => "Kacci"),
        
    "Rajshahi" => array(
        "population" => "1m",
        "Spot" => "Bagha mosque",
        "Food" => "Mango"),
    
    "Barishai" => array(
        "population" => ".8m",
        "Spot" => "Eho park",
        "Food" => "Guava")
    
    ];

echo $divisions["Barishal"]["Food"];
echo "<pre>";
print_r($divisions);

?>