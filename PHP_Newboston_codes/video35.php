<?php

$string = 'abcdefghijklmnopq0123456';

echo $string_shuffled = str_shuffle($string);   //shuffles the string

$half = substr($string_shuffled, 0 , 5);      //returns the sub string from position

echo '<br />';
echo $half;

echo '<br />';
echo $str_reversed = strrev($string);

 ?>
