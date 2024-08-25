<?php $mysqli = new mysqli("localhost", "root", "", "wdpf_60") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>All products (above 5000 price)</h3>
    <?php 
    $data = $mysqli->query("SELECT * FROM product");

    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>

        <?php
        while($row = $data->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price'];?></td>
        </tr>

      <?php  }
        ?>
    </table><br>
    <a href="manufacturer.php">All Manufacturer</a>
    
</body>
</html>