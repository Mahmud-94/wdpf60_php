<?php
include_once("db_config.php");

session_start();


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
$password= ($password);

    $result = $db->query("SELECT * FROM users WHERE email = '$email' AND password ='$password'");
    $row = $result->fetch_assoc();

    if($result->num_rows==0){
        $_SESSION['login_err']= "Email or password may wrong, pls try again";

    header("Location: index.php");
    }else{
        $_SESSION['email']= $email;
        $_SESSION['name']= $row['fullname'];

        header("Location: dashboard.php");
    }
}
?>