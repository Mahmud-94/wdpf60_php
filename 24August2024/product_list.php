<?php 


include_once("dbconfig.php");

$sql= "SELECT * FROM `product`";

$lufy = $db->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
    

    <?php 
    while($row = $lufy->fetch_array()){ ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Price'] ?></td>
        <td><?php echo $row['manufacturer_id'] ?></td>
       
    </tr>

    <?php }
    ?>
    </table>
</body>
</html>