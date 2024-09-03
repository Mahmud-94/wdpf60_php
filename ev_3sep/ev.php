<!-- CREATE VIEW products_above_10000_price AS
SELECT *
FROM product
WHERE price>10000;


CREATE VIEW product_list AS
SELECT product.id, product.name AS "Product Name", product.price,
 manufacturer.name AS "Manufacturer Name" FROM product, manufacturer WHERE manufacturer.id = product.manufacturer_id


CREATE TRIGGER manufacturer_delete
AFTER DELETE
ON manufacturer FOR EACH ROW
DELETE FROM product
WHERE product.manufacturer_id = old.id;



CREATE TRIGGER product_insert
AFTER INSERT
ON product FOR EACH ROW
INSERT INTO log_book VALUES(
NULL, new.name, "Insert", NOW()
);

CREATE TRIGGER product_update
AFTER UPDATE
ON product FOR EACH ROW
INSERT INTO log_book VALUES(
NULL, old.name, "Update", NOW()
);

CREATE TRIGGER product_delete
AFTER DELETE
ON product FOR EACH ROW
INSERT INTO log_book VALUES(
NULL, old.name, "Delete", NOW()
); -->




<?php $db = new mysqli("localhost", "root", "", "tclk_60") ?>

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





<?php $db = new mysqli("localhost", "root", "", "tclk_60") ?>


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
        $id = $_POST['company'];

        $sql2 = "DELETE FROM  manufacturer WHERE id ='$id'";
        $delete =  $db->query($sql2);

        if($delete){
            echo "Successfully Deleted.";
        }
        else{
            echo "Failed";
        }
    }

    $sql = "SELECT * FROM manufacturer";
    $result = $db->query($sql);


    ?>

<form action="" method="post">


<select name="company" id="">
    <option value="">select one</option>
    <?php while($row = $result->fetch_assoc()){ ?>

        <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

        <?php } ?>

</select>
<input type="submit" name="submit" value="Delete" id="">
</form>
<a href="product.php">Product list</a>
    
</body>
</html>







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





C

<?php $Haki = new mysqli("localhost","root","","idb_bisew"); 

$Nami = $Haki->query("SELECT * FROM manufacturer");
?>

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

$Del =$_POST['pro'];

$Naruto = $Haki->query("DELETE FROM manufacturer WHERE id ='$Del'");

if($Naruto){
    echo "Successfully Deleted";
}
else{
    echo "Unable to delete";
}
}

?>
    <form action="" method="post">
        <select name="pro" id="">
            <option value="">Select One</option>

            <?php while($Robin = $Nami->fetch_object()){ ?>
                <option value=" <?php echo $Robin->id ?> "><?php echo $Robin->id ?> .<?php echo $Robin->name ?></option>

            <?php } ?>
        </select>  

        <input type="submit" name="submit" value="DELETE">

        
    </form>
</body>
</html>



