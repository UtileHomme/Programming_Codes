<?php

$num1 = '1';
$num2 = 1;

if($num1==$num2)    //here both are treated as same independent of the type
{
  echo 'Equals';
}
else
{
  echo 'Not equal';
}

echo '<br />';

if($num1===$num2)    //here both are checked on the basis of type as well irrespective of the value
{
  echo 'Equals';
}
else
{
  echo 'Not equal';
}
 ?>
