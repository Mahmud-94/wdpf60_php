<?php

$fruits = array("apple", "orange", "banana");

echo"<pre>";
print_r($fruits);
echo "<br>";

echo "Next: ". next($fruits);
echo"<br>";
echo prev($fruits);
echo "<br>";
echo end($fruits);
echo "<br>";
echo reset($fruits);
echo "<br>";
echo current($fruits);








?>