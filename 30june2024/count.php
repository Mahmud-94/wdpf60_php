<?php 

$fruits = array("apple", "orange", "banana");
echo "<br>"; 
echo count($fruits);



$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo "<br>";
echo count($locations);




$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo "<br>";
echo count($locations, 1);


echo "<br>";
echo sizeof($locations);

?>
