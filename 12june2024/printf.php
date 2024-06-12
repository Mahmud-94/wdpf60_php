<?php
printf("Bar inventory: %d bottles of tonic %s price $%f", 100, "water", 50.2);
echo "<br>";

printf("%d bottles of tonic water cost $%f.", 100 , 43.20);
echo "<br>";

printf("%d bottles of tonic water cost  $%.2f.", 100 , 43.28850);
echo "<br>";

$cost = sprintf("$%.2f are price of %s" , 43.2, "Tonic water"); // $cost =$43.20
echo "<br>";
echo $lost = sprintf("$%.2f are price of %s" , 43.2, "Tonic water");

?>