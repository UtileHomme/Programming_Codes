<?php
//valid for video 82-83

$directory = '/home/scrabbler/Jatin/Programming Codes/PHP_Newboston_codes';

if($handle = opendir($directory.'/'))
{
  echo 'Looking inside '.$directory.': <br />';

  while($file = readdir($handle))       //file is in string format
  {
    if($file!='.' && $file!='..')
    {
      echo '<a href=" '.$directory. '/'.$file.' ">'.$file.'</a><br />';
    }
  }

}

?>
