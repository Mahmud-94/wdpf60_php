<?php

$students = array("tanim"=>20, "saif"=>19, "abdullah"=>22);

if (array_key_exists("tanim", $students)){
    echo "tanim got {$students['tanim']}";
}
else {
    echo "Not found";
}
?>