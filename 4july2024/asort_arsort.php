<?php 

$states = array("Dhaka", "Barisal", "Khulna", "Cumilla", "Sylhet");

echo "<pre>";
print_r($states);


asort($states);
echo "<hr>";
print_r($states);


arsort($states);
echo "<hr>";
print_r($states);

?>