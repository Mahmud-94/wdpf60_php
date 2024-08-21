<?php  require_once("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All product</title>
</head>
<body>
    <h3>Product list</h3>

    <?php 
    // $sql = "SELECT * FROM product";
    $sql = "SELECT * FROM product, catagories WHERE product.catagories=catagories.cat_id";
    $data = $db->query($sql);
    ?>
    
    

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Details</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>category</th>
            <th>Action</th>
            
        </tr>
    <?php 
    

    while($row = $data->fetch_assoc()){?>
         
        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Details']?></td>
            <td><?php echo $row['Price']?></td>
            <td><?php echo $row['Quantity']?></td>
            <td><?php echo $row['cat_name']?></td>

            <td>
                <a onclick="return confirm('Are you sure to delete')" href="Product_delete.php?ID=<?php echo $row['ID']?>"><img src="bin1.png" width="20" height="20" alt=""></a> |

                <a href="Product_edit.php?ID=<?php echo $row['ID']?>"><img src="pencil.jpg" width="20" height="20" alt=""></a>
            </td>
        </tr>

        <?php
    }
    ?>
    </table>
   
   
    <br>

    <a href="product_entry.php">New Product</a>
    
</body>
</html>

