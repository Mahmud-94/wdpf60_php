<?php 
include_once"class_file.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
if(isset($_POST['submit'])){
    $Info =($_FILES['file']);
       $obj = new File($Info);
       $obj->upload();

}

?>
<body>
    <Form method="post" enctype="multipart/form-data">
        <input type="file" name="file" id=""><br>
        <input type="submit" name="submit" value="Upload" id="">
    </Form>
</body>
</html>