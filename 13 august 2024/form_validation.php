<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_REQUEST['submit'])){
        $msg = form_validation();
        if ($msg) {
            echo "<ul>";
            foreach ($msg as $m) {
                echo "<li>$m<li>";
            }
            echo "</ul>";
        } else {
            echo "validation ok";
        }
    }

    function form_validation()
    {
        $errors = [];
        $name = $_REQUEST['name'];
        if (empty($name)) {
            $errors[] = "You must enter name";
        }


            if(isset($_REQUEST["gender"])){
            $gender = $_REQUEST["gender"];

            }

         else{
            if(empty($gender)==""){
                $errors[] = "You must select gender";
           }  
        }


        $district = $_REQUEST["district"];
        if ($district == "") {
            $errors[] = "You must enter district";
        }

        $hobbies = $_REQUEST["hobbies"];
        if(empty($hobbies)){
         $errors[] = "You must select one hobby";
        }

        return $errors;
    }


    ?>





    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name" id=""><br>
        Gender : <br>
        <input type="radio" name="gender" value="male" id="" checked>Male
        <input type="radio" name="gender" value="female" id="">Female <br>
        District : <br>
        <select name="district" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Barisal">Barisal</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
        </select> <br>
        Hobbies : <br>
        <input type="checkbox" name="hobbies" value="Cricket" id="">Cricket
        <input type="checkbox" name="hobbies" value="Footbal" id="">Footbal
        <input type="checkbox" name="hobbies" value="Hockey" id="">Hockey
        <input type="checkbox" name="hobbies" value="Tenis" id="">Tenis <br><br>
    
    Address : <br>
    <textarea name="address" placeholder="Enter your address" id=""></textarea> <br>
    <input type="submit" name="submit" value="REGISTER" id="">
    </form>

</body>

</html>