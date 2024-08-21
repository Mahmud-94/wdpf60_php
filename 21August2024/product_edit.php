
<?php require_once("dbconfig.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Product edit</h3>
<?php 
    $ID = $_REQUEST['ID'];
    

    // print_r($row);



if(isset($_POST['update'])){
    extract($_POST);

   
    $sql = "UPDATE product set Name = '$product',  Details = '$details', Price='$price', Quantity='$quantity' WHERE ID = '$ID'";

    

    $result = $db->query($sql);

    if($db->affected_rows){
        echo "Successfully updated";
    } else {
        echo "Failed";
    }
}

//Getting data from table
$sql = "SELECT * FROM product WHERE ID=$ID";
    $data = $db->query($sql);
    $row = $data->fetch_object();

?>



<form action="" method="post">
    Name: <br>
    <input type="text" name="product" id="" placeholder="Enter your product name" value="<?php echo $row->Name; ?>"><br>
    Details: <br>
    <textarea name="details" id="" placeholder="Write about your product"><?php echo $row->Details; ?></textarea><br>
    Price:<br>
    <input type="text" name="price" id="" placeholder="Enter your product's price" value="<?php echo $row->Price; ?>"><br>
    Quantity:<br>
    <input type="number" name="quantity" placeholder="Enter your product's quantity" id="" value="<?php echo $row->Quantity; ?>"><br>
    <input type="submit" name="update" value="Update" id=""><br>
    <input type="hidden" name="ID" id="" value="<?php echo $row->ID; ?>" ><br>
</form>


<a href="all_products.php">Product List</a>
    
</body>
</html>
