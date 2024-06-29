<?php
$fruits = array("mango", "banana","lichi");

foreach($fruits as $x) {
    echo $x . "<br>";
}

echo "<hr>";
//associative array
$students = array("tanim"=>20, "saif"=>19, "abdullah"=>22);

foreach($students as $k=>$v){
    echo "$k : $v <br>";
}
?>