<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php 
// if(isset($_POST['submit'])){
//     $Info =($_FILES['file']);
//        $obj = new File($Info);
//        $obj->upload();

// }

// class File
// {
//     public $fileinfo;
//     public function __construct($x)
//     {
//         $this->fileinfo = $x;
//     }
//     public function upload()
//     {
//         $info = $this->fileinfo;
//         $name = $info['name'];
//         $tmpname = $info['tmp_name'];
//         $filesize = $info['size'];
//         $allowedsize = 512000;
//         $allowedtypes = ["jpg", "png"];
//         $errors = array();
//         $data = pathinfo($name);
//         $ext = strtolower($data['extension']);
//         if ($filesize > $allowedsize) {
//             $errors[] = "Filesize must be within 500kb";
//         }
//         if (!in_array($ext, $allowedtypes)) {
//             $errors[] = "File type must be jpg and png";
//         }
//         if (count($errors) > 0) {
//             foreach ($errors as $err) {
//                 echo $err . "<br>";
//             }
//         } else {

//             if (move_uploaded_file($tmpname, "uploads/" . $name)) {
//                 echo "uploaded successfully";
//             }
//         }


//     }
// }
?>
<!-- <body>
    <Form method="post" enctype="multipart/form-data">
        <input type="file" name="file" id=""><br>
        <input type="submit" name="submit" value="Upload" id="">
    </Form>
</body>
</html> -->




<?php
// if(isset($_REQUEST["submit"])){
//     $stid = $_REQUEST['stid'];

//     $obj = new student("result.txt");
//     $obj->show_result($stid);
// }

// class student {
//     public $datas;
//     public $arraydata;

//     public function __construct($file){
//         $this->datas = $file;
//         $this->arraydata = file($this->datas);
//     }
    
//     public function show_result($stid){
 
//     $datas = file('result.txt');
    
//     foreach($this->arraydata as $data){
//         $line = explode("|", $data);
//         list($id, $name, $score, $result, $grade) = $line;
//         if($id == $stid){
//             $output = $id . $name . $score . $result . $grade;
//             }
//         }
//         echo $output;
//     }
// }
?>
    <!-- <form action="" method="post">
        <select name="stid" id="">
        <option value="">Select one</option>
            <option value="1">Abir</option>
            <option value="2">Hasan</option>
            <option value="3">Tamim</option>
        </select>

        <input type="submit" name="submit" value="Show result">
    </form> -->

   <!-- p10| Ball| 400
p20| Bat| 280
p30| Cap| 480 -->




    <?php 
// if(isset($_POST["submit"])){
//     $email = $_POST["email"];
//     $pass = $_POST["pass"];
//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         echo "Not a valid email";
//     }
//     else if(strlen($pass)<6) {
//         echo "password must be at least 6 character";
//     }
    
//     else {
//         echo"Email is validated";
//     }
// }
?>
    <!-- <form action="" method="post">
        <input type="text" name="email" id="" placeholder="Enter email"> <br>
        <input type="text" name="pass" id="" placeholder="Enter password"> <br>
        <input type="submit" name="submit" id="" value="submit">
    </form> -->




    


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Show</title>
</head>
<body>
    <?php 
    // if(isset($_POST['submit'])){
    //     $Grade = $_POST['grade'];

    //     echo Grade_Find($Grade);
    // }

    // function Grade_Find($x){
    //     if($x == "A"){
    //         return $x . " : Result is Excellent";
    //     }
    //     if($x == "B"){
    //         return $x. " : Result is Good";
    //     }
    //     if($x == "C"){
    //         return $x. " : Result is Fair";
    //     }
    //     if($x == "D"){
    //         return $x. " : Result is Poor";
    //     }
    // }
       
    ?>
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter your Grade"> 
        <input type="submit" name="submit" value="submit">   
    </form>
</body>
</html> -->



<?php
    // if (isset($_POST["submit"])) {
    //     $numbers = $_POST["number"];
    //     $numarray = explode(",", $numbers);

    //     $max = $numarray[0];
    //     $min = $numarray[0];

    //     for ($i = 0; $i <count($numarray); $i++) {
    //         if ($numarray[$i] > $max) {
    //             $max = $numarray[$i];
    //         }
    //         if ($numarray[$i] < $min) {
    //             $min = $numarray[$i];
    //         }
    //     }

    //     echo"Among these numbers $numbers <br>";
    //     echo "Maximum number:  $max" . "<br> Minimum number: $min";
    // }

    ?>
    <!-- <form action="" method="post">
        <input type="text" name="number" id=""><br>
        <input type="submit" name="submit" id="" value="submit">
    </form> -->




    <?php 
//     if(isset($_POST["submit"])){
//         //print_r($_POST);
//         $n = $_POST['number'];
//         echo prime_check($n);        
//     }   
//     function prime_check($n){
//         if ($n == 0) {
//             return'It is not a prime number';
//         }
//        else if ($n == 1) {
//             return'It is not a prime number';
//     }
//     else if ($n == 2) {
//         return 'It is a prime number';
//     }
//     else{
//         for ($i = 2; $i < $n; $i++) {
//             if($n%$i == 0) {
//                 return 'It is not a prime number';
//     }
// }
// return 'It is a prime number';
//     }
// }
    ?>

    <!-- <form action="" method="post">
        <input type="text" name="number"> <br>
        <input type="submit" name="submit" value="Check">

    </form> -->



    <?php 
// if(isset($_POST["submit"])) {
//     $n = $_POST["number"];
//     echo fact_check($n);
// }

// function fact_check($n){
//      $fact = 1;

//     for($x = $n; $x > 1; $x--) {
//         $fact=$fact*$x;

// }
// return $fact;
// }
?>
    <!-- <form action="" method="post">
        <input type="text" name="number"><br>
        <input type="submit" name="submit" value="Check">
    </form> -->




    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <?php 
    // $result = [ "saif" =>50, "nazrul"=>42, "rummana"=>49, "tanim"=>41]
    ?>
    <!-- <table border="1">
        <tr>
            <th>Student name</th>
            <th>Obtained score</th>
        </tr> -->

    <?php 
    // foreach($result as $name=>$score){
    //     echo "<tr>";
    //     echo "<td>$name</td>";
    //     echo "<td>$score</td>";
    //     echo "</tr>";
    // }    ?>
    
    <!-- <tr>
        <td colspan="2">
            <?php
            //  $maxscore = max($result);
            // $student = array_search($maxscore, $result);
            // echo "Maximum score $maxscore obtained by $student";
            ?>
        </td>
    </tr>
    </table>
    
</body>
</html> -->




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
    <?php
    // if(isset($_REQUEST['submit'])){
    //     $msg = form_validation();
    //     if ($msg) {
    //         echo "<ul>";
    //         foreach ($msg as $m) {
    //             echo "<li>$m<li>";
    //         }
    //         echo "</ul>";
    //     } else {
    //         echo "validation ok";
    //     }
    // }
    // function form_validation()
    // {
    //     $errors = [];
    //     $name = $_REQUEST['name'];
    //     if (empty($name)) {
    //         $errors[] = "You must enter name";
    //     }
    //         if(isset($_REQUEST["gender"])){
    //         $gender = $_REQUEST["gender"];
    //         }
    //     else{
    //         if(empty($gender)==""){
    //             $errors[] = "You must select gender";
    //        }  
    //     }
    //     $district = $_REQUEST["district"];
    //     if ($district == "") {
    //         $errors[] = "You must enter district";
    //     }
    //     $hobbies = $_REQUEST["hobbies"];
    //     if(empty($hobbies)){
    //      $errors[] = "You must select one hobby";
    //     }
    //     return $errors;
    // }
    ?>

    <!-- <form action="" method="post">
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
</html> -->


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