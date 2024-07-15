<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_REQUEST["submit"])){
    $pid = $_REQUEST['nid'];

    $obj = new student("product.txt");
    $obj->show_result($pid);
}

class student {
    public $datas;
    public $arraydata;

    public function __construct($file){
        $this->datas = $file;
        $this->arraydata = file($this->datas);
    }
    
    public function show_result($pid){
 
    $datas = file('product.txt');
    
    foreach($this->arraydata as $data){
        $line = explode("|", $data);
        list($id, $name, $price) = $line;
        if($id == $pid){
            $output ="ID: " . $id ."<br>" . "Product name: " . $name ."<br>" . "Price: " . $price;
            }
        }
        echo $output;
    }
   
}

?>
    <form action="" method="post">
        <select name="nid" id="">
        <option value="">Select one</option>
            <option value="p10">p10</option>
            <option value="p20">p20</option>
            <option value="p30">p30</option>
        </select>

        <input type="submit" name="submit" value="Show result">
    </form>
    
</body>
</html>