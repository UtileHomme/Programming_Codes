<?php

$number1 = 10;
$number2 = 5;

function add($number1, $number2)
{
  return $number1 + $number2;
}

echo $sum = add($number1,$number2);

echo '<br />';

function displayDate($day, $date, $year)
{
  echo $day.' '.$date.' '.$year;
}

displayDate('Monday', 31, 2011);
 ?>
