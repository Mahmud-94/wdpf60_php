<?php
class SimpleClass
{
    public $var = 'a default value'; // public property declaration
    // private const a="America"; // private constant Declaration

    public const a="America"; 
 
    // public method declaration
    public function displayVar() {
        echo $this->var;
    }

    // Static method declaration
    public static function displayconst() {
        echo $self::const;
}

}
$obj1 = new SimpleClass;
echo $obj1->var;
echo $obj1::a;  // scope resulation
$obj1->displayVar();
?>