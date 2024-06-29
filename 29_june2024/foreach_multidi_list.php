<?php

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
 foreach ($customers AS $customer) {

list($name, $email, $phone) = $customer;
 echo "Name: {$name}, Email: {$email}, Language: {$phone}";
 echo "<hr>";
 
 }



?>