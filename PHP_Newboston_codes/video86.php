<?php

$filename = 'video85(filerename).txt';
$rand = rand(10000,99999);

//how to rename an uploaded file
if(rename($filename, $rand.'.txt'))
{
  echo 'File '.$filename.' has been renamed to <strong>'.$rand.'.txt</strong>';
}
else
{
  echo 'Error renaming';
}

 ?>
