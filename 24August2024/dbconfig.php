<?php  


$db = new mysqli("localhost", "root", "", "evidence 2024");

if($db->connect_errno){
    echo $db->connect_error;
    exit();
}
?>