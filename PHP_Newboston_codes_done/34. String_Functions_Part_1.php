<?php

//also contains some part of video 35

$string = 'This is an example string.';

echo '$string = This is an example string.;<br />';
echo '$str_word_count = str_word_count($string)<br />';    //full stop is not included
echo '<br />';
echo 'Answer to above '.$str_word_count = str_word_count($string).'<br />';    //full stop is not included


echo '<br />';

echo '$str_word_count1 = str_word_count($string, 0)<br />';
echo '<br />';
echo 'Answer to above '.$str_word_count1 = str_word_count($string, 0).'<br />';  //same as above -> returns integer value

echo '<br />';
echo '$str_word_count2 = str_word_count($string, 1)<br />';
echo '<br />';
echo 'Answer to above '.$str_word_count2 = str_word_count($string, 1).'<br />';     //returns an Array

echo '<br />';
echo 'print_r($str_word_count2)<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
print_r($str_word_count2);    //returns the array with corresponding index of each word
echo '<br />';

echo '<br />';
echo 'var_dump($str_word_count2)<br />';
echo '<br />';
echo 'Answer to above is <br /><br />';
var_dump($str_word_count2);

echo '<br />';
$str_word_count3 = str_word_count($string, 2);
echo '<br />';
echo '$str_word_count3 = str_word_count($string, 2)<br />
var_dump($str_word_count3);<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count3);   //returns an array giving the starting position of each word

echo '<br />'.
$str_word_count3 = str_word_count($string, 1,'.');
echo '<br />';
echo '$str_word_count3 = str_word_count($string, 1,'.')<br />
var_dump($str_word_count3);<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count3);
echo '<br />';

$string1 = 'This is an example string .';
echo '$string1 = This is an example string .;<br />';
echo '<br />';
$str_word_count4 = str_word_count($string1, 1,'.');
echo '<br />';

echo '$string1 = This is an example string .
$str_word_count4 = str_word_count($string1, 1,'.')<br />
var_dump($str_word_count4); <br />';
echo '<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count4);   //because of space after string, '.' - fullstop is a new word

$string2 = 'This is an example string & this is a tutorial.';
echo '$string2 = This is an example string & this is a tutorial.;<br />';
echo '<br />'.
$str_word_count5 = str_word_count($string2, 1,'&.');
echo '<br />';
echo '$string2 = This is an example string & this is a tutorial.
$str_word_count5 = str_word_count($string2, 1,&.)<br />
var_dump($str_word_count5);<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count5);

 ?>
