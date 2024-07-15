<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Not a valid email";
    }
    else if(strlen($pass)<6) {
        echo "password must be at least 6 character";
    }
    
    else {
        echo"Successfully login";
    }
}
?>
    <form action="" method="post">
        <input type="text" name="email" id="" placeholder="Enter email"> <br>
        <input type="text" name="pass" id="" placeholder="Enter password"> <br>
        <input type="submit" name="submit" id="" value="submit">
    </form>
    
</body>
</html>