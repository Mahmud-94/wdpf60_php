<a href="get_post.php?name=masud&email=aaasghf@gmail.com&address=Shantibag">lick Here</a><br>

<?php


// if(isset($_POST['subscribe'])){
    if(isset($_REQUEST['subscribe'])){
//     echo "<pre>";
// // print_r($_GET);
// // print_r($_POST);
// echo "</pre>";


// echo $_POST['email'];
echo $_REQUEST['email'];
echo '<br>';
// echo $_POST['pswd'];
echo $_REQUEST['pswd'];

}



?>



<form action="" method="post">
 
 Email address:<br />
 <input type="text" name="email" size="20" maxlength="50" value="" />
 <br />
 Password:<br />
 <input type="password" name="pswd" size="20" maxlength="15" value="" />
 <br />
 
 <input type="submit" name="subscribe" value="subscribe!" />
 <br />
 </form>