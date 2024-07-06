<?php 
 $input = "I just can't get <<enough>> <br> of <h1> PHP! </h1> ";

 echo strip_tags($input);
 echo"<br>";

 $input1 = "Email <a href='spammer@example.com'>spammer@example.com</a>";
 echo strip_tags($input1);
 echo"<br>";

 $input2 = "This <a href='http://www.example.com/'>example</a>
 is <b>awesome</b>!";
 echo strip_tags($input2, "<a>");
?>