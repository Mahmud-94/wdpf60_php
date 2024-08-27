<?php $conn = new mysqli("localhost", "root", "", "classicmodels") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search products</h3>


    <?php 
    if(isset($_GET['search'])){
        $term = $_GET['term'];
        $result  = $conn->query ("SELECT customerNumber, customerName, phone FROM customers WHERE customerName LIKE '%$term%'");

        $records = $result->num_rows;

        echo "<p>with the keyword $term we have found $records number of records</p>";

    
    // extract($_GET);
    // echo $term;

    // echo $search;
}

while($row = $result->fetch_object()){
    echo "Customer Number" . $row->customerNumber  . "Customer name". $row->customerName . "Phone number". $row->phone . "<hr>";
}
    
    ?>

    <form action="" method="get">
        <input type="text" name="term" id="" placeholder="search here">
        <input type="submit" name="search" id="" value="search">
    </form>
    
</body>
</html>