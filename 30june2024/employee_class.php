<?php 

class employee{
    private $name;
    public $age;
    public $address;
    protected $phone;
    protected $wage;
    public function setname($name){
        $this->name = $name;
    }
    public function setwage($wage){
        $this->wage = $wage;
    }

    public function info(){
        $full = "";
        $full.="Name: " . $this->name . "<br>";
        $full.="Age: " . $this->age . "<br>";
        $full.="Address: " . $this->address . "<br>";
        $full.= "salary". $this->wage . "<br>";
        return $full;
    }
}  // End of class

class programmer extends employee{
    public function bonus($percent){
        return $this->wage*$percent;
    }

}

$obj1 = new employee;
//$obj1->name = "Romij";  //   -> is  Hash rocket
$obj1->setname ("Romij");
$obj1->setwage ("5000");
$obj1->age = 20;
$obj1->address = "Malibag";

echo $obj1->info();

echo"<br>";

$prog1 = new programmer;
echo "salary".$prog1-> ."<br>";
echo $prog1->bonus(.10);



?>