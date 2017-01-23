<?php

$string = 'This part do not search. This part search';

echo $string_new = substr_replace($string, 'alex', 29, 4);  //29 specifies the position we want to start replacing; 4 specifies the number of characters to replace

 ?>
