<?php 

$grades = array(42, 98, 100, 100, 43, 12);

echo"<pre>";
print_r($grades);


asort($grades);
echo"<pre>";
print_r($grades);


arsort($grades);
echo"<pre>";
print_r($grades);


$fruits = array("mango", "apple", "orange", "banana");

rsort($fruits);
print_r($fruits);

?>

