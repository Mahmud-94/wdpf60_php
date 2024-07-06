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
    $stid = $_REQUEST['stid'];

    $datas = file('result.txt');
    // echo'<pre>';
    // print_r($data);


    foreach($datas as $data){
        $line = explode("|", $data);
        list($id, $name, $score, $result, $grade) = $line;
        if($id == $stid){
            echo $id, $name, $score, $result , $grade;
            }
        }
    }


?>
    <form action="" method="post">
        <select name="stid" id="">
        <option value="">Select one</option>
            <option value="1">Abir</option>
            <option value="2">Hasan</option>
            <option value="3">Tamim</option>
        </select>

        <input type="submit" name="submit" value="Show result">
    </form>
    
</body>
</html>