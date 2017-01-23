<?php

$string = 'This is an example string. ';

//trim will remove whitespaces from both ends of the string
$string_trimmed = trim($string);

//to trim only left handside - use ltrim
//for right hand use - rtrim

echo $string_trimmed;

echo '<br />';

$string1 = 'This is a <img scr="image.jpg" /> string ';

//addslashes adds slashes before the quotes
echo $string_slashes = htmlentities(addslashes($string1));

echo '<br />';

echo $string_strip = stripslashes(($string_slashes));
?>
