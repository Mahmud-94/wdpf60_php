<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students and District where Students wise sorting</h1>

<?php 

$Students = [
    "Mahmud"=> "Barisal",
    "Abir"=> "Dhaka",
    "Jamil"=>"Faridpur",
    "Rakib"=> "Narayanganj",
    "Noman"=> "Munshiganj",
    "Joy"=> "Jamalpur",
];

echo "<pre>";
print_r($Students);
echo "</pre>";
echo"<hr>";


ksort($Students);

foreach ($Students as $student=>$District) {
    echo "$student -> $District <br>";
}

//echo "<pre>";
//print_r($countries);



?>
    
</body>
</html>