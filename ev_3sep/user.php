<?php $db = new mysqli("localhost", "root", "", "ev_pr_3sep"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);

        $result = $db->query("SELECT * FROM user WHERE name = '$name' AND password = '$password'");
        if($result->num_rows>0){
            echo "Login valid";
        }else{
            echo "Login not valid";
        }
    }
    
    ?>

    <form action="" method="post">
        Name:
        <input type="text" name="name" placeholder="Enter your name" id=""><br>
        Password:
        <input type="text" name="password" id=""><br>
        <input type="submit" name="submit" value="submit" id="">
    </form>
    
</body>
</html>