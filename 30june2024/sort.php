<?php 

$grades = array(42, 98, 100, 100, 43, 12);

echo"<pre>";
print_r($grades);


sort($grades);
echo"<pre>";
print_r($grades);


rsort($grades);
echo"<pre>";
print_r($grades);


$fruits = array("mango", "apple", "orange", "banana");

rsort($fruits);
print_r($fruits);

?>

