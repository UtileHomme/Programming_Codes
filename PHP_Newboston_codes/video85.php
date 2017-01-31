<?php
//valid for video 85

//how to delete an uploaded file
$filename = 'video85(filedelete).txt';

if(unlink($filename))
{
  echo 'File <strong>'.$filename.'</strong> has been deleted.';
}
else
{
  echo 'File cannot be deleted';
}


 ?>
