<?php
require_once "layouts/config.php";
session_start();

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password=  $_POST['password'];
    $password=md5($password);
     $usertype=  $_POST['usertype'];
}

if($usertype==1){
    $sql=$db->query("SELECT * FROM admin WHERE email ='$email' AND password='$password'");

    if($sql->num_rows){
        //sessoin
        $_SESSION['email']= $email;
        $_SESSION['usertype']= $usertype;

        //redirect
        header("Location:dashboard.php");
    }
}

if($usertype==2){
    $sql=$db->query("SELECT * FROM agent WHERE email ='$email' AND password='$password'");

    if($sql->num_rows){
        //sessoin
        $_SESSION['email']= $email;
        $_SESSION['usertype']= $usertype;

        //redirect
        header("Location:agent.php");
    }
    
    
}

if($usertype==3){
    $sql=$db->query("SELECT * FROM user WHERE email ='$email' AND password='$password'");

    if($sql->num_rows){
        //sessoin
        $_SESSION['email']= $email;
        $_SESSION['usertype']= $usertype;

        //redirect
        header("Location:client.php");
    }
    
}



?>