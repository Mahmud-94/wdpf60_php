<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Country and capital where country wise sorting</h1>

<?php 

$countries = [
    "Bangladesh"=> "Dhaka",
    "Srilanka"=> "Colombo",
    "Uganda"=>"Kampala",
    "Egypt"=> "Kairo",
    "China"=> "Beijing",
    "Japaqn"=> "Tokyo",
];

echo "<pre>";
print_r($countries);
echo "</pre>";
echo"<hr>";


ksort($countries);

foreach ($countries as $country=>$capital) {
    echo "$country -> $capital <br>";
}

//echo "<pre>";
//print_r($countries);



?>
    
</body>
</html>