<?php
//timestamps are used for keeping track of current time / day
//gives integral value starting from 1st Jan 1970
//echo time();

$time = time();
$actual_time = date('H:i:s', $time);

echo 'The current time is '.$actual_time.'<br />';

$actual_date = date('D M  Y', $time);

echo 'The current date is '.$actual_date.'<br />';      //('d m Y @ H:i:s');

 ?>
