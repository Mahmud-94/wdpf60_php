<?php

$students = array("tanim"=>20, "saif"=>19, "abdullah"=>22);
$found = array_search("22", $students);

if($found){
    echo "Found {$found} and he scored $students[$found]";
}

?>