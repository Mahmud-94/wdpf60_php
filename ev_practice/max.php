<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST["submit"])) {
        $numbers = $_POST["number"];
        $numarray = explode(",", $numbers);
        //print_r($numarray);

        $max = $numarray[0];
        $min = $numarray[0];

        for ($i = 0; $i <count($numarray); $i++) {
            if ($numarray[$i] > $max) {
                $max = $numarray[$i];
            }
            if ($numarray[$i] < $min) {
                $min = $numarray[$i];
            }
        }

        echo"Among these numbers $numbers <br>";
        echo "Maximum number:  $max" . "<br> Minimum number: $min";
    }

    ?>
    <form action="" method="post">
        <input type="text" name="number" id=""><br>
        <input type="submit" name="submit" id="" value="submit">
    </form>

</body>

</html>