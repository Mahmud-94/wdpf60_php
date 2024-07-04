<?php 

$files = Array (  'picture1.jpg', 'picture10.jpg', 'picture2.jpg', 'picture20.jpg', 'picture15.jpg', 'picture8.jpg', 'picture5.jpg', 'picture22.jpg' );


echo'<pre>';
print_r( $files );

natsort( $files );
// natcasesort( $files );

echo'<br>';
print_r( $files );

?>