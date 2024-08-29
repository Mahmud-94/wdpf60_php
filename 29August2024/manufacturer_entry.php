<?php $db = new mysqli("localhost", "root", "", "tclk_60") ?>

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
       if($db->query("CALL add_manufacturer('$name', '$address', '$contact')")){
        echo "Successfully Added";
       }
       else{
        echo "Failed to add";
       }
    }
    ?>


<form action="" method="post">
    <input type="text" name="name" id="" placeholder="Enter manufacturer name"><br>
    <textarea name="address" id=""></textarea><br>
    <input type="text" name="contact"><br>
    <input type="submit" name="submit" value="Submit" id="">
</form>
<a href="manufacturer.php">Manufacturer List</a>
    
</body>
</html>