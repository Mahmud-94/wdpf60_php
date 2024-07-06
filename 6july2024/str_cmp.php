<?php 
$password1 = "asdf";
$password2 = "asDF"; 


if(strcmp($password1, $password2)==0){
    echo "Password Matched";
}
else {
    echo "Not matched";
}

echo"<hr>";

if(strcasecmp($password1, $password2)==0){
    echo "Password Matched";
}
else {
    echo "Not matched";
}


?>