
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






 
    <!-- <h1>Country and capital where country wise sorting</h1> -->

<?php 

// $countries = [
//     "Bangladesh"=> "Dhaka",
//     "Srilanka"=> "Colombo",
//     "Uganda"=>"Kampala",
//     "Egypt"=> "Kairo",
//     "China"=> "Beijing",
//     "Japaqn"=> "Tokyo",
// ];

// echo "<pre>";
// print_r($countries);
// echo "</pre>";
// echo"<hr>";


// ksort($countries);

// foreach ($countries as $country=>$capital) {
//     echo "$country -> $capital <br>";
// }

?>





    <?php
    // if (isset($_POST["submit"])) {
    //     $numbers = $_POST["number"];
    //     $numarray = explode(",", $numbers);
    //     //print_r($numarray);

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
  