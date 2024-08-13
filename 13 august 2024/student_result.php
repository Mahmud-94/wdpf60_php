<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $result = [ "saif" =>50, "nazrul"=>42, "rummana"=>49, "tanim"=>41]
    ?>
    <table border="1">
        <tr>
            <th>Student name</th>
            <th>Obtained score</th>
        </tr>
    

    <?php 
    foreach($result as $name=>$score){
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$score</td>";
        echo "</tr>";

    }

    ?>
    <tr>
        <td colspan="2">
            <?php $maxscore = max($result);
            $student = array_search($maxscore, $result);
            echo "Maximum score $maxscore obtained by $student";
            ?>
        </td>
    </tr>
    </table>
    
</body>
</html>