<?php

//watch video 87-91 before this

/*
$filename_or = 'image.jpg';
echo $filename = rand(1000,9999).md5($filename_or). rand(1000,9999);
*/
$filename = 'file.txt';
if(file_exists($filename))
//returns true if file exists else false and create a new one
{
  echo 'File already exists';
}
else
{
  $handle = fopen($filename, 'w');
  fwrite($handle, 'Nothing');
  fclose($handle);
}
 ?>
