<?php $db = new mysqli("localhost", "root", "", "ev_xm"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product above 5000</h3>
    <?php
    $data = $db->query("SELECT * FROM `products_above_5000_price`");
     ?>

     <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
    <?php while($row = $data->fetch_assoc()){?>
        <tr>
        <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['manufacturer_id'];?></td>
        </tr>

        <?php }?>
     </table>
    
</body>
</html>