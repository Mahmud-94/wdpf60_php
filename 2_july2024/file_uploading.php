<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
<?php 

if(isset($_POST['submit'])){


// print_r($_POST);
// echo"<hr>";
// print_r($_FILES);
$temp = $_FILES['photo']['tmp_name'];
$filename = $_FILES['photo']['name'];
$filedata = pathinfo($filename);
$file_ext = strtolower($filedata['extension']);
$allowed_ext = ["jpg", "jpeg", "png"];
$filesize = $_FILES['photo']['size'];
$allowedsize = 307200;

$path = "photos/". $filename;
$errors = [];

if($filesize>$allowedsize){
    $errors[] = "within 300 KB is allowed";
}

if(!in_array($file_ext, $allowed_ext)){
    $errors[] = "allowed file types jpg, jpeg, png";
}

if(count($errors) > 0){
    foreach($errors as $error){
        echo $error ."<br>";
    }
}else{


$status = move_uploaded_file($temp, $path);
if($status) echo "successfully uploaded";
}
}

?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="file" name="photo" id=""><br>
        <input type="submit" name="submit" id="" value="SEND"><br>
    </form>
    
</body>
</html>