<?php 

class employee{
    public $name;
    public $age;
    public $address;

    public function info(){
        $full = "";
        $full.="Name: " . $this->name . "<br>";
        $full.="Age: " . $this->age . "<br>";
        $full.="Address: " . $this->address;
        return $full;
    }
}

$obj1 = new employee;
$obj1->name = "Romij";  //   -> is  Hash rocket
$obj1->age = 20;
$obj1->address = "Malibag";

echo $obj1->info();

?>