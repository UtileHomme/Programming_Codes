<?php

$find = array('is', 'string', 'example');
$replace = array('IS', 'STRING', ' ');

$string = 'This is a string, and is an example';


//the function will look for all the strings in the array
echo $new_string = str_replace($find, $replace, $string);
 ?>
