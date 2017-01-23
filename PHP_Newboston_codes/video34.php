<?php

//also contains some part of video 35

$string = 'This is an example string.';

echo $str_word_count = str_word_count($string);    //full stop is not included

echo '<br />';
echo $str_word_count1 = str_word_count($string, 0);  //same as above -> returns integer value

echo '<br />';
echo $str_word_count2 = str_word_count($string, 1);     //returns an Array
print_r($str_word_count2);    //returns the array with corresponding index of each word
echo '<br />';
var_dump($str_word_count2);

echo '<br />';
$str_word_count3 = str_word_count($string, 2);
var_dump($str_word_count3);   //returns an array giving the starting position of each word

echo'<br />'.
$str_word_count3 = str_word_count($string, 1,'.');
var_dump($str_word_count3);

$string1 = 'This is an example string .';
echo'<br />'.
$str_word_count4 = str_word_count($string1, 1,'.');
var_dump($str_word_count4);   //because of space after string, '.' - fullstop is a new word

$string2 = 'This is an example string & this is a tutorial.';
echo'<br />'.
$str_word_count5 = str_word_count($string2, 1,'&.');
var_dump($str_word_count5);

 ?>
