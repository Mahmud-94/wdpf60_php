<?php 
if(isset($_POST["submit"])){
    $n = $_POST["number"];
    echo fc($n);
}
function fc($n){
    $fact = 1;

    for($x=$n; $x>1; $x--){
        $fact=$fact*$x;
    }
    return "Factorial of $n is ". $fact;
}

?> 

<form action="" metod="post">
    <input type="text" name="number" id="">
    <input type="submit" name="submit" value="check" id="">
</form>