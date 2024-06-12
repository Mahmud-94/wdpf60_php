<?php

$x = 50;

$output = (float) $x;

var_dump($x);
echo gettype($output);
echo "<br>";


$name = "Rahim";
$output = (Int) $name;

echo $output;
echo "<br>";

$name = (bool) "Rahim";
echo $name;

echo "<hr>";

$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0]; // Outputs 1114

var_dump($scoreboard);

echo "<hr>";

$model = "Toyota";
 $obj = (object) $model;
 print_r($obj);
 print $obj->scalar; // returns "Toyota"


?>