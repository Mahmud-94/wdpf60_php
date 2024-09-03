<?php $db = new mysqli("localhost", "root", "", "ev_xm"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
if(isset($_POST['submit'])){
        extract($_POST);

       if($db->query("CALL ins('$name', '$address', '$contact')")){
        echo "Successfully Added";
       }
       else{
        echo "Failed to add";
       }
    }
    ?>


<form action="" method="post">
    <input type="text" name="name" id="" placeholder="Enter manufacturer name"><br><br>

    <textarea name="address" id="" placeholder="Enter your address"></textarea><br><br>

    <input type="text" name="contact" placeholder="Enter contact number"><br><br>

    <input type="submit" name="submit" value="Submit" id="">
</form>
<a href="manufacturer_del.php">Manufacturer List</a>
    
</body>
</html>
