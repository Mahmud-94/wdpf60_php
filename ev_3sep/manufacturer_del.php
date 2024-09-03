<?php $db = new mysqli("localhost", "root", "", "ev_xm"); ?>


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



