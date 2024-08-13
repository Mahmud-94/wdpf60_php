<?php 
if(isset($_POST["submit"])){
    $n = $_POST["number"];
    echo pc($n);
}

function pc($n){
    if ($n==0){
        return "It is not a prime number";
    }

    else if ($n==1){
        return "It is not a prime number";
    }
    else if ($n==2){
        return "It is not a prime number";
    }
    else{
        for($i=2; $i < $n; $i++){
            if($n%$i == 0){
                return "It is not a prime number";
            }
        }
        return "It is a prime number";
    }

}


?>

<form action="" method="post">
    <input type="text" name="number">
    <input type="submit" name="submit" value="check">
</form>