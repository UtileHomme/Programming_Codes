<?php
//valid for video 48,49

$offset = 0;
$find = ' is  ';
$find_length = strlen($find);

$string = 'This is a string, and it is an example';
echo strpos($string, $find);     //third argument is offset -> from where to start checking
echo '<br />';

//we'll loop through the string by finding the string , going forward the find_length value until the next occurrenc eis found
while($string_pos = strpos($string,$find,$offset))
{
  echo '<strong>'.$find.'</strong> found at '.$string_pos.'<br />';
  $offset = $string_pos + $find_length;
}


 ?>
