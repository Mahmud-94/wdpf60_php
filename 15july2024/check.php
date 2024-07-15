<?php 

$userEmail = "hassan@gmail.com";
$userPass = "123456";

$email=$_POST["email"];
$password=$_POST["password"];

if($email==$userEmail && $password==$userPass) {


session_start();
$_SESSION["email"]=$email;

header("Location:home1.php");
}
else{
    header("Location:login.php");
}


?>