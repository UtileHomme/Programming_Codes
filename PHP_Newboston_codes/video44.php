<?php

$string = 'This is a string';

// 1 -> found a Match
//0 -> Didn't find a Match

if(preg_match('/is/', $string))       //Search for 'is' in the string
{
  echo 'Match found';
}
else
{
    echo 'No match found';
}

echo '<br />';



 ?>
