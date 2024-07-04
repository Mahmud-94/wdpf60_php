<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(isset($_POST["submit"])) {
    $n = $_POST["number"];
    echo fact_check($n);

}

function fact_check($n){
     $fact = 1;

    for($x = $n; $x > 1; $x--) {
        $fact=$fact*$x;

}
return $fact;
}

?>
    <form action="" method="post">
        <input type="text" name="number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    
</body>
</html>