<?php 

    session_start();
    echo $_SESSION["email"];
    if(!isset($_SESSION["email"])){
        header("Location:login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1>
    <br>
    <a href="logout.php">Logout</>
    
</body>
</html>