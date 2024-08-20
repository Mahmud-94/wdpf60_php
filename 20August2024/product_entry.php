
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Product entry</h3>
<?php  
if(isset($_POST['submit'])){
    extract($_POST);
    
    $sql = "INSERT INTO product (ID, Name, Details, Price, Quantity) VALUES (NULL, '$product', '$details', '$price', '$quantity')";

    require_once("dbconfig.php");

    $result = $db->query($sql);

    if($db->affected_rows){
        echo "Successfully Added";
    } else {
        echo "Failed";
    }
}

?>



<form action="" method="post">
    Name: <br>
    <input type="text" name="product" id="" placeholder="Enter your product name"><br>
    Details: <br>
    <textarea name="details" id="" placeholder="Write about your product"></textarea><br>
    Price:<br>
    <input type="text" name="price" id="" placeholder="Enter your product's price"><br>
    Quantity:<br>
    <input type="number" name="quantity" placeholder="Enter your product's quantity" id=""><br>
    <input type="submit" name="submit" value="Submit" id=""><br><br>
</form>


<a href="all_products.php">Product List</a>
    
</body>
</html>
