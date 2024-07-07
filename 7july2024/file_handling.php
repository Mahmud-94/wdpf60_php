<?php
//  // Open a text file for reading purposes
//  $fh = fopen( 'files/users.txt', 'r');

// Open a text file for writing purposes
// $fh = fopen( 'files/users.txt', 'w');
 
// Open a text file for concade purposes
$fh = fopen( 'files/users.txt', 'a');


 //print_r($fh);

 //echo fgets($fh);

 fwrite($fh,'<br>Hello everybody');
 fclose($fh);

 $fh = fopen( 'files/users.txt', 'r');
 while (!feof($fh)) {
    echo fgets($fh) . "<br>";
 }

 // Close the file
 fclose($fh);

 unlink('files/users.txt');
 print_r($GLOBALS);
 ?>