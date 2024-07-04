<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){
        //print_r($_POST);
        $n = $_POST['number'];
        echo prime_check($n);
        
    }
    
    function prime_check($n){
        if ($n == 0) {
            return'It is not a prime number';
        }
       else if ($n == 1) {
            return'It is not a prime number';
    }
    else if ($n == 2) {
        return 'It is a prime number';
    }
    else{
        for ($i = 2; $i < $n; $i++) {
            if($n%$i == 0) {
                return 'It is not a prime number';
    }
}
return 'It is a prime number';
    }
}


    ?>



    <form action="" method="post">
        <input type="text" name="number"> <br>
        <input type="submit" name="submit" value="Check">

    </form>

    
    
</body>
</html>