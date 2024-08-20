
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

class File
{
    public $fileinfo;
    public function __construct($x)
    {
        $this->fileinfo = $x;
    }
    public function upload()
    {
        $info = $this->fileinfo;
        $name = $info['name'];
        $tmpname = $info['tmp_name'];
        $filesize = $info['size'];
        $allowedsize = 512000;
        $allowedtypes = ["jpg", "png"];
        $errors = array();

        $data = pathinfo($name);
        $ext = strtolower($data['extension']);

        if ($filesize > $allowedsize) {
            $errors[] = "Filesize must be within 500kb";
        }
        if (!in_array($ext, $allowedtypes)) {
            $errors[] = "File type must be jpg and png";
        }
        if (count($errors) > 0) {
            foreach ($errors as $err) {
                echo $err . "<br>";
            }
        } else {

            if (move_uploaded_file($tmpname, "uploads/" . $name)) {
                echo "uploaded successfully";
            }
        }

        //move_uploaded_file($tmpname, "uploads/". $name);

    }
}

?>
<body>
    <Form method="post" enctype="multipart/form-data">
        <input type="file" name="file" id=""><br>
        <input type="submit" name="submit" value="Upload" id="">
    </Form>
</body>
</html>