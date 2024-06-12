<?php

// class Appliance {
//  private $_power;
//  function setPower($status) {   
//  $this->_power = $status;
//  }
//  }


//  $blender = new Appliance;
//  $blender->setPower("on");

//  var_dump($blender);

class student {
    public $name;
    public $age;
    function register($name, $age) {   
    $this->name = $name;
    $this->age = $age;
    }
    }
   
   
    $student1 = new student;
    $student1->register("masud", 20);
   
    var_dump($student1);

 ?>