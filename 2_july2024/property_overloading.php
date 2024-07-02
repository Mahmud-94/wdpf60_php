<?php 
 class Employee
 {
 public $name;
 function __set($propName, $propValue)
 {
// echo "Nonexistent variable: \$$propName!";
$this->$propName = $propValue;
 }
 }

 $emp1 = new Employee();
 echo $emp1->name = "Hasan  <br>";
 echo $emp1->phone = "09876543";


 ?>