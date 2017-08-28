<?php

$time = time();

$time_now = date('d M Y @ H:i:s a', $time);
$time_modified = date('d M Y @ H:i:s', $time-60);

echo $time_now.'<br />';
echo $time_modified.'<br />';

echo $time_modified1= date('d M Y @ H:i:s', strtotime('-1 week'));  //+1 year or week or +1 week 2 hours 30 seconds


 ?>
