<?php
 function retrieveUserProfile()
 {
 $user[] = "Jason Gilmore";
 $user[] = "jason@example.com";
 $user[] = "English";
 return $user;
 }
 list($name, $email, $language) = retrieveUserProfile();
 echo "Name: {$name}, Email: {$email}, Language: {$language}";
 ?>
 